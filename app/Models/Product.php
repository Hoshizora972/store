<?php

namespace App\Models;

use App\Models\Favori;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'category_id',
                            'name', 
                            'description' , 
                            'price',
                            'images'];

    protected $casts = [
                            'images' => 'array',
                            ];


    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favoris(): HasMany
    {
        return $this->hasMany(Favori::class);
    }
    public function isfavoris()
    {
        return $this->hasMany(Favori::class);
    }
}
