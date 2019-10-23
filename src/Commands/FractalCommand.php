<?php

namespace Gtechmx\Fractal\Commands;

use Illuminate\Console\Command;

class FractalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:transformer {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileName = $this->argument('name');
        $transformerFolder = base_path("App\\Transformers");
        @mkdir($transformerFolder);
        $path = base_path("App\\Transformers\\".$fileName.".php");
        
        if (file_exists($path)) {
            echo "Nombre del archivo ya creado";
            return false;
        }
        
        $fp = fopen($path, "w");
        $file = $this->makeFile($fileName);
        
        fwrite($fp, $file);
        
        fclose($fp);
    }
    
    private function makeFile($name) {
        $file = '<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class '.$name.' extends TransformerAbstract
{
    /**
     * 
     * Define all includes to array.
     * 
     */
    protected $availableIncludes = [];
    
    /**
     * 
     * Pass item or collection in variable to transform function.
     * 
     */
    public function transform()
    {
        return [];
    }
}';

    return $file;

    }
}
