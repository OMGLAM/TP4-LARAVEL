// Exemple dans app/Models/AfficherLivre.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AfficherLivre extends Model
{
    protected $table = 'livres';
    protected $fillable = ['title', 'author', 'genre', 'published_year', 'available'];
}
