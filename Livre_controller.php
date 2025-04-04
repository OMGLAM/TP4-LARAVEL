namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfficherLivre;

class LivreController extends Controller
{
    public function index()
    {
        $livres = AfficherLivre::all();
        return view('livres.index', compact('livres'));
    }

    public function show($id)
    {
        $livre = AfficherLivre::findOrFail($id);
        return view('livres.show', compact('livre'));
    }

    public function create()
    {
        return view('livres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'published_year' => 'required|integer',
            'available' => 'required|boolean',
        ]);

        AfficherLivre::create($request->all());

        return redirect('/livre')->with('success', 'Livre ajouté avec succès');
    }
}
