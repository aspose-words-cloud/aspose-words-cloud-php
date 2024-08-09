<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableTests.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{DeleteTableCellOnlineRequest, DeleteTableCellRequest, DeleteTableOnlineRequest, DeleteTableRequest, DeleteTableRowOnlineRequest, DeleteTableRowRequest, GetTableCellFormatOnlineRequest, GetTableCellFormatRequest, GetTableCellOnlineRequest, GetTableCellRequest, GetTableOnlineRequest, GetTablePropertiesOnlineRequest, GetTablePropertiesRequest, GetTableRequest, GetTableRowFormatOnlineRequest, GetTableRowFormatRequest, GetTableRowOnlineRequest, GetTableRowRequest, GetTablesOnlineRequest, GetTablesRequest, InsertTableCellOnlineRequest, InsertTableCellRequest, InsertTableOnlineRequest, InsertTableRequest, InsertTableRowOnlineRequest, InsertTableRowRequest, RenderTableOnlineRequest, RenderTableRequest, UpdateTableCellFormatOnlineRequest, UpdateTableCellFormatRequest, UpdateTablePropertiesOnlineRequest, UpdateTablePropertiesRequest, UpdateTableRowFormatOnlineRequest, UpdateTableRowFormatRequest};
use Aspose\Words\Model\{TableCellFormat, TableCellInsert, TableInsert, TableProperties, TableRowFormat, TableRowInsert};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work wtih table.
 */
class TableTests extends BaseTestContext
{
    /*
     * Test for getting tables.
     */
    public function testGetTables()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTables.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTablesRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTables($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTables());
        Assert::assertNotNull($result->getTables()->getTableLinkList());
        Assert::assertCount(5, $result->getTables()->getTableLinkList());
        Assert::assertEquals("0.0.1", $result->getTables()->getTableLinkList()[0]->getNodeId());
    }

    /*
     * Test for getting tables online.
     */
    public function testGetTablesOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTablesOnlineRequest(
            $requestDocument,
            "",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTablesOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting tables without node path.
     */
    public function testGetTablesWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTablesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTablesRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTables($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTables());
        Assert::assertNotNull($result->getTables()->getTableLinkList());
        Assert::assertCount(5, $result->getTables()->getTableLinkList());
        Assert::assertEquals("0.0.1", $result->getTables()->getTableLinkList()[0]->getNodeId());
    }

    /*
     * Test for getting table.
     */
    public function testGetTable()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTable($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTable());
        Assert::assertNotNull($result->getTable()->getTableRowList());
        Assert::assertCount(1, $result->getTable()->getTableRowList());
        Assert::assertNotNull($result->getTable()->getTableRowList()[0]->getTableCellList());
        Assert::assertCount(2, $result->getTable()->getTableRowList()[0]->getTableCellList());
    }

    /*
     * Test for getting table online.
     */
    public function testGetTableOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTableOnlineRequest(
            $requestDocument,
            1,
            "",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting table without node path.
     */
    public function testGetTableWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTable($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTable());
        Assert::assertNotNull($result->getTable()->getTableRowList());
        Assert::assertCount(1, $result->getTable()->getTableRowList());
        Assert::assertNotNull($result->getTable()->getTableRowList()[0]->getTableCellList());
        Assert::assertCount(2, $result->getTable()->getTableRowList()[0]->getTableCellList());
    }

    /*
     * Test for deleting table.
     */
    public function testDeleteTable()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestDeleteTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteTableRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteTable($request));
    }

    /*
     * Test for deleting table online.
     */
    public function testDeleteTableOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteTableOnlineRequest(
            $requestDocument,
            1,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteTableOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting table without node path.
     */
    public function testDeleteTableWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestDeleteTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteTableRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteTable($request));
    }

    /*
     * Test for adding table.
     */
    public function testInsertTable()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestInsertTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new InsertTableRequest(
            $remoteFileName,
            $requestTable,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTable($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTable());
        Assert::assertNotNull($result->getTable()->getTableRowList());
        Assert::assertCount(4, $result->getTable()->getTableRowList());
        Assert::assertNotNull($result->getTable()->getTableRowList()[0]->getTableCellList());
        Assert::assertCount(5, $result->getTable()->getTableRowList()[0]->getTableCellList());
    }

    /*
     * Test for adding table online.
     */
    public function testInsertTableOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestTable = new TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new InsertTableOnlineRequest(
            $requestDocument,
            $requestTable,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for adding table without node path.
     */
    public function testInsertTableWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestInsertTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new InsertTableRequest(
            $remoteFileName,
            $requestTable,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTable($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getTable());
        Assert::assertNotNull($result->getTable()->getTableRowList());
        Assert::assertCount(4, $result->getTable()->getTableRowList());
        Assert::assertNotNull($result->getTable()->getTableRowList()[0]->getTableCellList());
        Assert::assertCount(5, $result->getTable()->getTableRowList()[0]->getTableCellList());
    }

    /*
     * Test for getting document properties.
     */
    public function testGetTableProperties()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTablePropertiesRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableProperties($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProperties());
        Assert::assertEquals("Table Grid", $result->getProperties()->getStyleName());
    }

    /*
     * Test for getting document properties online.
     */
    public function testGetTablePropertiesOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTablePropertiesOnlineRequest(
            $requestDocument,
            1,
            "",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTablePropertiesOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting document properties without node path.
     */
    public function testGetTablePropertiesWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTablePropertiesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTablePropertiesRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableProperties($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProperties());
        Assert::assertEquals("Table Grid", $result->getProperties()->getStyleName());
    }

    /*
     * Test for updating table properties.
     */
    public function testUpdateTableProperties()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestUpdateTableProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2.0,
            "style_options" => "ColumnBands",
        ));
        $request = new UpdateTablePropertiesRequest(
            $remoteFileName,
            1,
            $requestProperties,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableProperties($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProperties());
        Assert::assertFalse($result->getProperties()->getAllowAutoFit());
        Assert::assertTrue($result->getProperties()->getBidi());
        Assert::assertEquals(1.0, $result->getProperties()->getBottomPadding());
        Assert::assertEquals(2.0, $result->getProperties()->getCellSpacing());
    }

    /*
     * Test for updating table properties online.
     */
    public function testUpdateTablePropertiesOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestProperties = new TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2,
            "style_options" => "ColumnBands",
        ));
        $request = new UpdateTablePropertiesOnlineRequest(
            $requestDocument,
            $requestProperties,
            1,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTablePropertiesOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for updating table properties without node path.
     */
    public function testUpdateTablePropertiesWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestUpdateTablePropertiesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1.0,
            "cell_spacing" => 2.0,
            "style_options" => "ColumnBands",
        ));
        $request = new UpdateTablePropertiesRequest(
            $remoteFileName,
            1,
            $requestProperties,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableProperties($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProperties());
        Assert::assertFalse($result->getProperties()->getAllowAutoFit());
        Assert::assertTrue($result->getProperties()->getBidi());
        Assert::assertEquals(1.0, $result->getProperties()->getBottomPadding());
        Assert::assertEquals(2.0, $result->getProperties()->getCellSpacing());
    }

    /*
     * Test for getting table row.
     */
    public function testGetTableRow()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableRowRequest(
            $remoteFileName,
            "tables/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRow($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRow());
        Assert::assertNotNull($result->getRow()->getTableCellList());
        Assert::assertCount(2, $result->getRow()->getTableCellList());
    }

    /*
     * Test for getting table row online.
     */
    public function testGetTableRowOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTableRowOnlineRequest(
            $requestDocument,
            "tables/1",
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting table row.
     */
    public function testDeleteTableRow()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestDeleteTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteTableRowRequest(
            $remoteFileName,
            "tables/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteTableRow($request));
    }

    /*
     * Test for deleting table row online.
     */
    public function testDeleteTableRowOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteTableRowOnlineRequest(
            $requestDocument,
            "tables/1",
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteTableRowOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for adding row.
     */
    public function testInsertTableRow()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestInsertTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRow = new TableRowInsert(array(
            "columns_count" => 5,
        ));
        $request = new InsertTableRowRequest(
            $remoteFileName,
            $requestRow,
            "sections/0/tables/2",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableRow($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRow());
        Assert::assertNotNull($result->getRow()->getTableCellList());
        Assert::assertCount(5, $result->getRow()->getTableCellList());
    }

    /*
     * Test for adding row online.
     */
    public function testInsertTableRowOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestRow = new TableRowInsert(array(
            "columns_count" => 5,
        ));
        $request = new InsertTableRowOnlineRequest(
            $requestDocument,
            $requestRow,
            "sections/0/tables/2",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableRowOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for getting row format.
     */
    public function testGetTableRowFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableRowFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableRowFormatRequest(
            $remoteFileName,
            "sections/0/tables/2",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowFormat($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRowFormat());
        Assert::assertTrue($result->getRowFormat()->getAllowBreakAcrossPages());
    }

    /*
     * Test for getting row format online.
     */
    public function testGetTableRowFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTableRowFormatOnlineRequest(
            $requestDocument,
            "sections/0/tables/2",
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowFormatOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test updating row format.
     */
    public function testUpdateTableRowFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestUpdateTableRowFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10.0,
            "height_rule" => "Exactly",
        ));
        $request = new UpdateTableRowFormatRequest(
            $remoteFileName,
            "sections/0/tables/2",
            0,
            $requestFormat,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableRowFormat($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRowFormat());
        Assert::assertTrue($result->getRowFormat()->getAllowBreakAcrossPages());
        Assert::assertTrue($result->getRowFormat()->getHeadingFormat());
        Assert::assertEquals(10.0, $result->getRowFormat()->getHeight());
    }

    /*
     * Test updating row format online.
     */
    public function testUpdateTableRowFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestFormat = new TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10,
            "height_rule" => "Auto",
        ));
        $request = new UpdateTableRowFormatOnlineRequest(
            $requestDocument,
            "sections/0/tables/2",
            $requestFormat,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableRowFormatOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for getting table cell.
     */
    public function testGetTableCell()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableCellRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCell($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCell());
        Assert::assertEquals("0.0.5.0.0", $result->getCell()->getNodeId());
    }

    /*
     * Test for getting table cell online.
     */
    public function testGetTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTableCellOnlineRequest(
            $requestDocument,
            "sections/0/tables/2/rows/0",
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting cell.
     */
    public function testDeleteTableCell()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestDeleteTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteTableCellRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteTableCell($request));
    }

    /*
     * Test for deleting cell online.
     */
    public function testDeleteTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteTableCellOnlineRequest(
            $requestDocument,
            "sections/0/tables/2/rows/0",
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteTableCellOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for adding cell.
     */
    public function testInsertTableCell()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestInsertTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCell = new TableCellInsert(array(
        ));
        $request = new InsertTableCellRequest(
            $remoteFileName,
            $requestCell,
            "sections/0/tables/2/rows/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableCell($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCell());
        Assert::assertEquals("0.0.5.0.3", $result->getCell()->getNodeId());
    }

    /*
     * Test for adding cell online.
     */
    public function testInsertTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestCell = new TableCellInsert(array(
        ));
        $request = new InsertTableCellOnlineRequest(
            $requestDocument,
            $requestCell,
            "sections/0/tables/2/rows/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableCellOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for getting cell format.
     */
    public function testGetTableCellFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestGetTableCellFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetTableCellFormatRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellFormat($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCellFormat());
        Assert::assertTrue($result->getCellFormat()->getWrapText());
    }

    /*
     * Test for getting cell format online.
     */
    public function testGetTableCellFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetTableCellFormatOnlineRequest(
            $requestDocument,
            "sections/0/tables/2/rows/0",
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellFormatOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating cell format.
     */
    public function testUpdateTableCellFormat()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestUpdateTableCellFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new TableCellFormat(array(
            "bottom_padding" => 5.0,
            "fit_text" => true,
            "horizontal_merge" => "First",
            "wrap_text" => true,
        ));
        $request = new UpdateTableCellFormatRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $requestFormat,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableCellFormat($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCellFormat());
        Assert::assertEquals(5.0, $result->getCellFormat()->getBottomPadding());
        Assert::assertTrue($result->getCellFormat()->getFitText());
        Assert::assertTrue($result->getCellFormat()->getWrapText());
    }

    /*
     * Test for updating cell format online.
     */
    public function testUpdateTableCellFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestFormat = new TableCellFormat(array(
            "bottom_padding" => 5,
            "fit_text" => true,
            "horizontal_merge" => "First",
            "wrap_text" => true,
        ));
        $request = new UpdateTableCellFormatOnlineRequest(
            $requestDocument,
            "sections/0/tables/2/rows/0",
            $requestFormat,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableCellFormatOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for table rendering.
     */
    public function testRenderTable()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestRenderTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new RenderTableRequest(
            $remoteFileName,
            "png",
            0,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderTable($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for table rendering.
     */
    public function testRenderTableOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new RenderTableOnlineRequest(
            $requestDocument,
            "png",
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderTableOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for table rendering without node path.
     */
    public function testRenderTableWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Tables";
        $localFile = "DocumentElements/Tables/TablesGet.docx";
        $remoteFileName = "TestRenderTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new RenderTableRequest(
            $remoteFileName,
            "png",
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderTable($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}