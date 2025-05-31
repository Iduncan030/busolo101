namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'package' => 'required|string',
            'preferred_date' => 'required|date',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'package' => $request->package,
            'preferred_date' => $request->preferred_date,
        ]);

        return redirect()->route('services')->with('success', 'Booking submitted!');
    }
}