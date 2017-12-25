<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TableTests.php">
*   Copyright (c) 2017 Aspose.Words for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/
use Aspose\Storage\StorageApi;
use Aspose\Words\Configuration;
use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\TableInsert;
use Aspose\Words\Model\TableRowInsert;
use Aspose\Words\Model\TableCellInsert;
use Aspose\Words\Model\TableRowFormat;
use Aspose\Words\Model\TableCellFormat;
use Aspose\Words\Model\TableProperties;
use Aspose\Words\Model\Border;
use Aspose\Words\Model\XmlColor;
use PHPUnit\Framework\Assert;

class TableTests extends \PHPUnit_Framework_TestCase
{
    protected $storage;

    protected $words;

    protected $config;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->storage = new StorageApi();
        $this->config = new Configuration();
        $this->storage->apiClient->apiKey = $this->config->getAppKey();
        $this->storage->apiClient->appSid = $this->config->getAppSid();
        $this->storage->apiClient->apiServer = $this->config->getHost() . "/v1.1/";
        $this->words = new WordsApi(null, $this->config);
    }

    /**
     * Test case for deleteTable
     *
     * Delete a table..
     *
     */
    public function testDeleteTable()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestDeleteTable.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 1;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteTableRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, "");

        $result = $this->words->deleteTable($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteTableCell
     *
     * Delete a table cell..
     *
     */
    public function testDeleteTableCell()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestDeleteTableCell.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteTableCellRequest($remoteName, "sections/0/tables/2/rows/0", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteTableCell($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteTableRow
     *
     * Delete a table row..
     *
     */
    public function testDeleteTableRow()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestDeleteTableRow.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteTableRowRequest($remoteName, "tables/1", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteTableRow($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getBorder
     *
     * Return a border..
     *
     */
    public function testGetBorder()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetBorder.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetBorderRequest($remoteName, "tables/1/rows/0/cells/0/", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getBorder($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getBorders
     *
     * Return a collection of borders..
     *
     */
    public function testGetBorders()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetBorders.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetBordersRequest($remoteName, "tables/1/rows/0/cells/0/", $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getBorders($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTable
     *
     * Return a table..
     *
     */
    public function testGetTable()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTable.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 1;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTableRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getTable($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTableCell
     *
     * Return a table cell..
     *
     */
    public function testGetTableCell()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTableCell.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTableCellRequest($remoteName, "sections/0/tables/2/rows/0", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getTableCell($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTableCellFormat
     *
     * Return a table cell format..
     *
     */
    public function testGetTableCellFormat()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTableCellFormat.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTableCellFormatRequest($remoteName, "sections/0/tables/2/rows/0", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getTableCellFormat($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTableProperties
     *
     * Return a table properties..
     *
     */
    public function testGetTableProperties()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTableProperties.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 1;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTablePropertiesRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getTableProperties($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTableRow
     *
     * Return a table row..
     *
     */
    public function testGetTableRow()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTableRow.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTableRowRequest($remoteName, "tables/1", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getTableRow($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTableRowFormat
     *
     * Return a table row format..
     *
     */
    public function testGetTableRowFormat()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTableRowFormat.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTableRowFormatRequest($remoteName, "sections/0/tables/2", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getTableRowFormat($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for getTables
     *
     * Return a list of tables that are contained in the document..
     *
     */
    public function testGetTables()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestGetTables.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetTablesRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->getTables($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for insertTable
     *
     * Adds table to document, returns added table's data..
     *
     */
    public function testInsertTable()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestInsertTable.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $tableDto = new TableInsert(array("columns_count" => 3, "rows_count" => 5));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\InsertTableRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $tableDto, "");

        $result = $this->words->insertTable($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for insertTableCell
     *
     * Adds table cell to table, returns added cell's data..
     *
     */
    public function testInsertTableCell()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestInsertTableCell.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $cell = new TableCellInsert();

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\InsertTableCellRequest($remoteName, "sections/0/tables/2/rows/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $cell);

        $result = $this->words->insertTableCell($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for insertTableRow
     *
     * Adds table row to table, returns added row's data..
     *
     */
    public function testInsertTableRow()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestInsertTableRow.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $row = new TableRowInsert(array("columns_count" => 5));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\InsertTableRowRequest($remoteName, "sections/0/tables/2", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $row);

        $result = $this->words->insertTableRow($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for renderTable
     *
     * Renders table to specified format..
     *
     */
    public function testRenderTable()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestRenderTable.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\RenderTableRequest($remoteName, $format, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "");

        $result = $this->words->renderTable($request);
        Assert::assertNotNull($result, "Error occurred while table rendering");
    }

    /**
     * Test case for updateTableCellFormat
     *
     * Updates a table cell format..
     *
     */
    public function testUpdateTableCellFormat()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestUpdateTableCellFormat.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $nodePath = "sections/0/tables/2/rows/0";
        $format = new TableCellFormat(array(
            "bottom_padding" => 5,
            "fit_text" => true,
            "horizontal_merge" => TableCellFormat::HORIZONTAL_MERGE_FIRST,
            "wrap_text" => true
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\UpdateTableCellFormatRequest($remoteName, $nodePath, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $format);

        $result = $this->words->updateTableCellFormat($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for updateTableProperties
     *
     * Updates a table properties..
     *
     */
    public function testUpdateTableProperties()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestUpdateTableProperties.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 1;
        $props = new TableProperties(array(
            "alignment" => TableProperties::ALIGNMENT_RIGHT,
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2,
            "left_indent" => 3,
            "left_padding" => 4,
            "right_padding" => 5,
            "style_options" => TableProperties::STYLE_OPTIONS_COLUMN_BANDS,
            "top_padding" => 6
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\UpdateTablePropertiesRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $props, "");

        $result = $this->words->updateTableProperties($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for updateTableRowFormat
     *
     * Updates a table row format..
     *
     */
    public function testUpdateTableRowFormat()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestUpdateTableRowFormat.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $nodePath = "sections/0/tables/2";
        $format = new TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10,
            "height_rule" => TableRowFormat::HEIGHT_RULE_AUTO
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\UpdateTableRowFormatRequest($remoteName, $nodePath, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null, $format);

        $result = $this->words->updateTableRowFormat($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteBorder
     *
     * Resets border properties to default values..
     *
     */
    public function testDeleteBorder()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestDeleteTableBorder.docx";
        $subfolder = "DocumentElements/TableBorders";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteBorderRequest($remoteName, "tables/1/rows/0/cells/0/", 0, self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->deleteBorder($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for deleteBorders
     *
     * Resets borders properties to default values..
     *
     */
    public function testDeleteBorders()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestDeleteTableBorders.docx";
        $subfolder = "DocumentElements/TableBorders";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteBordersRequest($remoteName, "tables/1/rows/0/cells/0/", $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteBorders($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }

    /**
     * Test case for updateBorder
     *
     * Updates border properties..
     *
     */
    public function testUpdateBorder()
    {
        $localName = "TablesGet.docx";
        $remoteName = "TestUpdateBorder.docx";
        $subfolder = "DocumentElements/Table";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $nodePath = "tables/1/rows/0/cells/0/";
        $index = 0;
        $border = new Border(array(
            "border_type" => Border::BORDER_TYPE_LEFT,
            "color" => new XmlColor(array("alpha" => 2)),
            "distance_from_text" => 6,
            "line_style" => Border::LINE_STYLE_DASH_DOT_STROKER,
            "line_width" => 2,
            "shadow" => true
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Table/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\UpdateBorderRequest($remoteName, $border, $nodePath, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->updateBorder($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}