<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Task extends Model
    {
        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'user_id',
            'title',
            'description',
            'skateholders',
            'due_date',
            'status',
        ];

        /**
         * The attributes that are mass assignable.
         *
         * @var array<string, string>
         * 
         * Used to retrieve data from the database
         */
        protected $casts = [
            'due_date',
        ]; 

        /**
         * Defining Task Relationships With User
        */
        public function user() {
            return $this->belongsTo(User::class);
        }
    }
