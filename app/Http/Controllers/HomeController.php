<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Services\BlogCategoryService;
use App\Services\BlogService;
use App\Services\CarouselService;
use App\Services\ExperienceService;
use App\Services\MessageService;
use App\Services\QualityService;
use App\Services\ServiceService;
use App\Services\SettingService;
use App\Services\TestimonyService;
use App\Services\VideoCategoryService;
use App\Services\VideoService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    private CarouselService $carouselService;
    private SettingService $settingService;
    private QualityService $qualityService;
    private ExperienceService $experienceService;
    private BlogService $blogService;
    private BlogCategoryService $blogCategoryService;
    private TestimonyService $testimonyService;
    private MessageService $messageService;
    private VideoCategoryService $videoCategoryService;
    private VideoService $videoService;
    private ServiceService $serviceService;

    public function __construct(
        CarouselService $carouselService,
        SettingService $settingService,
        QualityService $qualityService,
        ExperienceService $experienceService,
        BlogService $blogService,
        BlogCategoryService $blogCategoryService,
        TestimonyService $testimonyService,
        MessageService $messageService,
        VideoCategoryService $videoCategoryService,
        VideoService $videoService,
        ServiceService $serviceService
    )
    {
        $this->carouselService = $carouselService;
        $this->settingService = $settingService;
        $this->qualityService = $qualityService;
        $this->experienceService = $experienceService;
        $this->blogService = $blogService;
        $this->blogCategoryService = $blogCategoryService;
        $this->testimonyService = $testimonyService;
        $this->messageService = $messageService;
        $this->videoCategoryService = $videoCategoryService;
        $this->videoService = $videoService;
        $this->serviceService = $serviceService;
    }

    public function index(): Renderable
    {
        $carousels = $this->carouselService->getCarouselsWithPaginator();
        $setting = $this->settingService->getSetting();
        $qualities = $this->qualityService->getQualitiesWithPaginator();
        $experiences = $this->experienceService->getExperiencesWithPaginator();
        $betterExperience = $this->experienceService->getBetterExperience();
        $testimonies = $this->testimonyService->getLastTestimories();
        $recentBlogs = $this->blogService->getRecentBlogs(1);
        $services = $this->serviceService->getServices();

        Session::put("setting", $setting);

        return view('welcome', [
            "carousels" => $carousels,
            "qualities" => $qualities,
            "experiences" => $experiences,
            "betterExperience" => $betterExperience,
            "testimonies" => $testimonies,
            "recentBlogs" => $recentBlogs,
            "services" => $services,
        ]);
    }

    public function services(): Renderable
    {
        $services = $this->serviceService->getServicesWithPaginator();

        return view("services", [
            "services" => $services,
        ]);
    }

    public function blog(): Renderable
    {
        $blogs = $this->blogService->getBlogsWithPaginator(1);
        $categories = $this->blogCategoryService->getCategoriesWithPaginator();
        $recentBlogs = $this->blogService->getRecentBlogs(1);

        return view("blog", [
            "blogs" => $blogs,
            "categories" => $categories,
            "recentBlogs" => $recentBlogs,
            "type" => 1,
        ]);
    }

    public function detail_blog($id): Renderable
    {
        $blog = $this->blogService->getBlog($id);
        $categories = $this->blogCategoryService->getCategoriesWithPaginator();
        $recentBlogs = $this->blogService->getRecentBlogs(1);
        $relatedBlogs = $this->blogService->getBlogsByCategory(1, $blog->blog_category_id);

        return view("blog-detail", [
            "blog" => $blog,
            "categories" => $categories,
            "recentBlogs" => $recentBlogs,
            "relatedBlogs" => $relatedBlogs,
            "type" => 1,
        ]);
    }

    public function storeMessage(MessageRequest $request): RedirectResponse
    {
        $this->messageService->storeMessage($request);

        return redirect()->route("blog.detail", $request["blog_id"]);
    }

    public function contact(): Renderable
    {
        return view("contact");
    }

    public function videos(): Renderable
    {
        $categories = $this->videoCategoryService->getCategoriesWithPaginator();
        $videos = $this->videoService->getVideosWithPaginator();
        $recentBlogs = $this->blogService->getRecentBlogs(1);

        return view("videos", [
            "videos" => $videos,
            "categories" => $categories,
            "recentBlogs" => $recentBlogs,
            "type" => 1,
        ]);
    }

    public function news(): Renderable
    {
        $blogs = $this->blogService->getBlogsWithPaginator(2);
        $categories = $this->blogCategoryService->getCategoriesWithPaginator();
        $recentBlogs = $this->blogService->getRecentBlogs(2);

        return view("news", [
            "blogs" => $blogs,
            "categories" => $categories,
            "recentBlogs" => $recentBlogs,
            "type" => 2,
        ]);
    }

    public function detail_news($id): Renderable
    {
        $blog = $this->blogService->getBlog($id);
        $categories = $this->blogCategoryService->getCategoriesWithPaginator();
        $recentBlogs = $this->blogService->getRecentBlogs(2);
        $relatedBlogs = $this->blogService->getBlogsByCategory(2, $blog->blog_category_id);

        return view("news-details", [
            "blog" => $blog,
            "categories" => $categories,
            "recentBlogs" => $recentBlogs,
            "relatedBlogs" => $relatedBlogs,
            "type" => 2,
        ]);
    }
}
