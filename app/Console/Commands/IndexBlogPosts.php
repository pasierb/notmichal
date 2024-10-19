<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\BlogPost;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class IndexBlogPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:index-blog-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index blog posts from the posts folder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsPath = base_path('posts');
        $files = File::files($postsPath);

        foreach ($files as $file) {
            $contentPath = $file->getRelativePathname();
            $content = File::get($file->getPathname());

            // Parse the frontmatter
            $parsedContent = YamlFrontMatter::parse($content);
            $frontMatter = $parsedContent->matter();

            // Extract title and slug from frontmatter, or use defaults
            $title = $frontMatter['title'] ?? $this->extractTitle($file);
            $slug = $frontMatter['slug'] ?? str_replace('.md', '', $contentPath);
            $coverImagePath = $frontMatter['cover_image'] ?? null;

            // Check if there's already an entry with the given content_path
            $existingPost = BlogPost::where('content_path', $contentPath)->first();

            if (!$existingPost) {
                // Create a new blog post entry
                BlogPost::create([
                    'content_path' => $contentPath,
                    'title' => $title,
                    'slug' => $slug,
                    'cover_image_path' => $coverImagePath,
                ]);

                $this->info("Indexed new post: {$title}");
            } else {
                $this->line("Post already indexed: {$contentPath}");
            }
        }

        $this->info('Blog post indexing completed.');
    }

    private function extractTitle($file)
    {
        // Read the first line of the file
        $firstLine = fgets(fopen($file, 'r'));

        // Remove Markdown heading syntax and trim
        return trim(preg_replace('/^#\s*/', '', $firstLine));
    }
}
