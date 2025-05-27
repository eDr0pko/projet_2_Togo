<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Offre extends Model
    {
        use HasFactory;

        protected $fillable = ['titre', 'description', 'publiee'];

        protected static function booted()
        {
            static::deleting(function ($offre) {
                $offre->candidatures()->delete();
            });
        }

        public function candidatures()
        {
            return $this->hasMany(Candidature::class);
        }

        
    }

?>


