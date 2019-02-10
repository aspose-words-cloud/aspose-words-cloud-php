<?php
    require_once realpath(__DIR__ . '/..') . '/vendor/autoload.php';
    
    use Aspose\Storage\Api\StorageApi;
	use Aspose\Words\Configuration;
	use Aspose\Words\WordsApi;
	use Aspose\Words\Model\Requests;
	use Aspose\Words\Model\SaveOptionsData;
    use Aspose\Words\Model\DocumentEntryList;
    use Aspose\Words\Model\DocumentEntry;
    
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
        	$file = realpath(__DIR__ . '/../..') . '/TestData/Common/' . $fileName;
	        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fileName, $file);
	        $this->storageApi->PutCreate($putRequest);
        }

        public function splitSpecificPagesToNewPDFs() {
            $fileName = "test_multi_pages.docx";
            $format = "pdf";
            $from = 1; // Splitting starts from the first page of the document
            $to = 2; // splitting ends at the last page of the document
            $folder = null; // Input file exists at the root of the storage
            $destName = null;

            // Upload source document to Cloud Storage
            $this->uploadFile($fileName);

            $request = new Requests\PostSplitDocumentRequest($fileName, $folder, null, null, null, $destName, $format, $from, $to);
            $result = $this->wordsApi->postSplitDocument($request);
            print_r($result);
        }

    }
    
    $document = new Document();
    $document->splitSpecificPagesToNewPDFs();
?>
