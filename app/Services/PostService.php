<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function store($data) : void
    {
        try {
            DB::beginTransaction();

            if(!empty($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $post = Post::create($data);
            $post->tags()->sync($tagIds ?? []);

            DB::commit();

        } catch (\Exception $exception) {

            DB::rollBack();
            abort(500, $exception->getMessage());
        }
    }

    public function update($post, $data)
    {
        try {
            DB::beginTransaction();

            if(!empty($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $post->update($data);
            $post->tags()->sync($tagIds ?? []);

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500, $exception->getMessage());
        }
    }
}
