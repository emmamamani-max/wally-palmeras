// Agregar junto a los demás use en routes/web.php:
use App\Models\Herramienta;

// Agregar al final de routes/web.php, conservando las rutas existentes:
Route::get('/herramientas', function () {
    $herramientas = Herramienta::all();
    return view('herramientas.lista', compact('herramientas'));
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas.formulario');
});

Route::post('/herramientas/nuevo', function () {
    request()->validate(
        ['nombre' => 'required', 'precio' => 'required|integer'],
        [
            'nombre.required' => 'Escribí el nombre de la herramienta.',
            'precio.required' => 'Escribí el precio de la herramienta.',
            'precio.integer' => 'El precio se anota solo con cifras.',
        ]
    );
    Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);
    return redirect('/herramientas');
});
