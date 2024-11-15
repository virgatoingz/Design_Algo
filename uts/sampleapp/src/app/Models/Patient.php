<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'birth_date', 
        'phone', 
        'address', 
        'status'
    ];
        // Patient.php
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
        // Patient.php
    public static function boot()
    {
        parent::boot();

        static::updating(function ($patient) {
            if (!in_array($patient->status, ['pending', 'approved', 'rejected'])) {
                throw new \Exception("Invalid status for patient");
            }
        });
    }


}
