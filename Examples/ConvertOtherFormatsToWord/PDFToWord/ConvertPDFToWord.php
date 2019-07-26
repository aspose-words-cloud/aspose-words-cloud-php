<?php
    require_once realpath(__DIR__ . '/../..') . '/vendor/autoload.php';
    
    use Aspose\Storage\Api\StorageApi;
	use Aspose\Words\Configuration;
	use Aspose\Words\WordsApi;
	use Aspose\Words\Model\Requests;
	use Aspose\Words\Model\SaveOptionsData;
    
    class Document {
        
        public $wordsApi;
        public $storageApi;
        
        public function __construct() {
            #$BaseUrl = "https://api.aspose.cloud/v1.1/";
            $AppKey = ""; // Get AppKey and AppSID from https://dashboard.aspose.cloud/
            $AppSid = ""; // Get AppKey and AppSID from https://dashboard.aspose.cloud/

            $config = new Configuration();
            $config->setAppKey($AppKey)->setAppSid($AppSid);
	        $this->wordsApi = new WordsApi(null, $config);

            $this->storageApi = new StorageApi();
        	$this->storageApi->getConfig()->setAppKey($AppKey)->setAppSid($AppSid);//->setHost($BaseUrl);
        }
        
        public function uploadFile($fileName) {
        	$file = realpath(__DIR__ . '/../../..') . '/TestData/ConvertDocument/' . $fileName;
	        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fileName, $file);
	        $this->storageApi->PutCreate($putRequest);
        }

        public function convertHTMLToWord() {
            $fileName = "awesome_table_in_pdf.pdf";
	        $destName = "html_example.docx";
	        
	        // First upload input file to Cloud Storage
	        $this->uploadFile($fileName);

	        $saveOptions = new SaveOptionsData(array("save_format" => "docx", "file_name" => $destName));
	        $request = new Requests\PostDocumentSaveAsRequest($fileName, $saveOptions);
	        $result = $this->wordsApi->postDocumentSaveAs($request); 
        }

    }
    
    $document = new Document();
    $document->convertHTMLToWord();
?>
