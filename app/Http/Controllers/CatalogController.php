<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CatalogController extends Controller
{
    /**
     * Display the catalog page with a list of products in a specific category.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index($category = null)
    {
        // Define the title for the catalog page
        $title = 'КАТАЛОГ | КУПИТЬ ЗМЕЮ';
        // Define the description for SEO purposes
        $description = "Исследуйте наш широкий ассортимент змей на продажу, от экзотических до ручных пород. Найдите идеального питомца с подробными описаниями, уходом и советами по содержанию. Безопасные покупки и консультации экспертов.";
        // Define the keywords for SEO purposes
        $keywords = "змеи на продажу, купить змею, экзотические змеи, ручные змеи, уход за змеями, змеи как питомцы, террариумы для змей";
        // Retrieve the products in the specific category
        $products = Product::products();
        if($category){
            //from show beautiful links
            $categoryId = Category::where('name','like', "%$category%")->value('id');
            $products = $products->where('category_id', $categoryId);
        }
        $products = $products->paginate(12);
        $categories = Category::select('categories.id', 'categories.name', DB::raw('COUNT(products.id) as product_count'))
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->where('products.active', 1)
            ->groupBy('categories.id', 'categories.name')
            ->get();
        $canonicalLink = '/catalog/';
        // Return
        return view('pages.catalog.index', [
            'products' => $products, 'title' => $title, 'categories' => $categories,
            'canonicalLink' => $canonicalLink, 'description' => $description, 'keywords' => $keywords]);
    }

    /**
     * Display the details of a product based on the given slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function detail($slug): \Illuminate\View\View
    {
        // Retrieve the product based on the provided slug
        $product = Product::product($slug)->first();
        // Generate the title for the product detail page
        $title = 'Купить змею | '. $product->name;
        // Generate the description for the product detail page
        $description = Str::limit($product->description, 160, '')." Посмотрите фото и оформите покупку сейчас.";
        // Generate keywords for SEO purposes
        $keywords = $product->name.", купить $product->name, уход за $product->name, содержание $product->name, экзотические змеи";
        // Create JSON-LD schema for SEO
        $ldJsonSchema = SeoService::createLdJson();
        $canonicalLink = 'catalog/'.$product->slug;
        // Return the view with product details and SEO information
        return view('pages.catalog.detail', [
            'product' => $product, 'title' => $title,
            'canonicalLink' => $canonicalLink, 'description' => $description , 'keywords' => $keywords]);
    }
}
