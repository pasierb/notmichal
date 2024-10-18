<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\BlogPost;

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
            
            // Check if there's already an entry with the given content_path
            $existingPost = BlogPost::where('content_path', $contentPath)->first();

            if (!$existingPost) {
                // Create a new blog post entry
                BlogPost::create([
                    'content_path' => $contentPath,
                    'title' => $contentPath,
                    'slug' => str_replace('.md', '', $contentPath),
                    // Add other fields as needed
                ]);

                $this->info("Indexed new post: {$contentPath}");
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
