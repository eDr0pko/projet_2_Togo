<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Candidature extends Model
    {
        use HasFactory;

        protected $fillable = ['offre_id', 'cv', 'lettre'];

        public $timestamps = false;
        
        public function offre()
        {
            return $this->belongsTo(Offre::class);
        }
    }

?>


