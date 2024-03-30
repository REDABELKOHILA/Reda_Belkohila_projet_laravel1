<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class VerifierAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Récupérer l'âge de l'utilisateur
        $age = $request->age;

        // Si l'âge est supérieur ou égal à 18 ans
        if ($age >= 18) {
            // Rediriger vers la page d'accueil
            dd($request->age);
            return redirect()->route('home');
        }
        dd('Thes person is a minor');

    }
}