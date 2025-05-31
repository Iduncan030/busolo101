namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExternalApiService
{
    public function getExampleData()
    {
        $response = Http::get('https://api.example.com/data');
        return $response->json();
    }
}