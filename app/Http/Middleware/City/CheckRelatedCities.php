<?php

namespace App\Http\Middleware\City;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\City;

class CheckRelatedCities
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cityId = $request->route('id');

        $city = City::with('districts')->findOrFail($cityId);

        // dd($city);

        if ($city->districts()->count() > 0) {
            return to_route('cities.index')
                ->withErrors(['error' => 'Esta cidade não pode ser removida pois há bairros relacionados.']);
        }

        return $next($request);
    }
}
