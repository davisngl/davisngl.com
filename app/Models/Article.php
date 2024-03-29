<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @mixin IdeHelperArticle
 */
class Article extends Model
{
    use HasFactory, HasSlug;

    private const READING_SPEED_PER_WORD = .8;

    public function timeToRead(): Attribute
    {
        return Attribute::get(function () {
           $words = Str::wordCount($this->content);

           return ceil(($words * static::READING_SPEED_PER_WORD) / 60);
        });
    }

    public function url(): string
    {
        return url('articles/' . $this->slug);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
