<?php 

php artisan make:job CompileReports --sync

class CompileReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reportId;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reportId)
    {
        $this->reportId = $reportId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump($this->reportId);
    }
}

php artisan make:controller ReportsController -r 

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $job = new CompileReports($request->input('reportId'));
        return 'done';
    }

}    

Route::get('reports', 'ReportsController@index');
