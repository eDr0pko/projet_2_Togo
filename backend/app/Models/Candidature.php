<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Candidature extends Model
    {
        protected $fillable = ['nom', 'prenom', 'offre_id', 'cv', 'lettre'];

        protected static function booted()
        {
            static::deleting(function ($candidature) {
                $cvPath = public_path('cv/' . $candidature->cv);
                if (file_exists($cvPath)) {
                    unlink($cvPath);
                }
            });
        }

        public function offre()
        {
            return $this->belongsTo(Offre::class);
        }

        public $timestamps = false;

    }

?>


