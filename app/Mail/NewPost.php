<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    // The Post instance
    protected $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mysite@test.com')
                    ->subject('New post published ' . $this->post->title)
                    // ->view('mail.new-post')
                    ->markdown('mail.new-post')
                    ->with([
                        'title' => $this->post->title,
                        'slug' => $this->post->slug
                    ]);
    }
}
