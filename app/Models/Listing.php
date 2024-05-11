<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    use hasFactory;
    // if we use AppServiceProvider.php s boot funtion then we dont need to use the fillable variable under this line.
    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];


    public static function listing_data()
    {
        return 'data';
    }


    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->Where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->Where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description ', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    use HasFactory;
}
