<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableTests.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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

namespace Aspose\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablesRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTables($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $request = new Requests\GetTablesOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getTablesOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablesRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTables($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTable($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $request = new Requests\GetTableOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            1,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getTableOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTable($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteTable($request);
    }

    /*
     * Test for deleting table online.
     */
    public function testDeleteTableOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\DeleteTableOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            1,
            "",
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteTable($request);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new \Aspose\Words\Model\TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new Requests\InsertTableRequest(
            $remoteFileName,
            $requestTable,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTable($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $requestTable = new \Aspose\Words\Model\TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new Requests\InsertTableOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestTable,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new \Aspose\Words\Model\TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ));
        $request = new Requests\InsertTableRequest(
            $remoteFileName,
            $requestTable,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTable($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablePropertiesRequest(
            $remoteFileName,
            1,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProperties());
        Assert::assertEquals("Table Grid", $result->getProperties()->getStyleName());
    }

    /*
     * Test for getting document properties online.
     */
    public function testGetTablePropertiesOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\GetTablePropertiesOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            1,
            "",
            NULL,
            NULL
        );

        $result = $this->words->getTablePropertiesOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablePropertiesRequest(
            $remoteFileName,
            1,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new \Aspose\Words\Model\TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2.0,
            "style_options" => "ColumnBands",
        ));
        $request = new Requests\UpdateTablePropertiesRequest(
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
            NULL
        );

        $result = $this->words->updateTableProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $requestProperties = new \Aspose\Words\Model\TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2,
            "style_options" => "ColumnBands",
        ));
        $request = new Requests\UpdateTablePropertiesOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestProperties,
            1,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTablePropertiesOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new \Aspose\Words\Model\TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1.0,
            "cell_spacing" => 2.0,
            "style_options" => "ColumnBands",
        ));
        $request = new Requests\UpdateTablePropertiesRequest(
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
            NULL
        );

        $result = $this->words->updateTableProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableRowRequest(
            $remoteFileName,
            "tables/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRow($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $request = new Requests\GetTableRowOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "tables/1",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableRowRequest(
            $remoteFileName,
            "tables/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteTableRow($request);
    }

    /*
     * Test for deleting table row online.
     */
    public function testDeleteTableRowOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\DeleteTableRowOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "tables/1",
            0,
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRow = new \Aspose\Words\Model\TableRowInsert(array(
            "columns_count" => 5,
        ));
        $request = new Requests\InsertTableRowRequest(
            $remoteFileName,
            "sections/0/tables/2",
            $requestRow,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableRow($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $requestRow = new \Aspose\Words\Model\TableRowInsert(array(
            "columns_count" => 5,
        ));
        $request = new Requests\InsertTableRowOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2",
            $requestRow,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableRowOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableRowFormatRequest(
            $remoteFileName,
            "sections/0/tables/2",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRowFormat());
        Assert::assertTrue($result->getRowFormat()->getAllowBreakAcrossPages());
    }

    /*
     * Test for getting row format online.
     */
    public function testGetTableRowFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\GetTableRowFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getTableRowFormatOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10.0,
            "height_rule" => "Exactly",
        ));
        $request = new Requests\UpdateTableRowFormatRequest(
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
            NULL
        );

        $result = $this->words->updateTableRowFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10,
            "height_rule" => "Auto",
        ));
        $request = new Requests\UpdateTableRowFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2",
            $requestFormat,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableRowFormatOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableCellRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCell($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCell());
        Assert::assertEquals("0.0.5.0.0", $result->getCell()->getNodeId());
    }

    /*
     * Test for getting table cell online.
     */
    public function testGetTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\GetTableCellOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2/rows/0",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableCellRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteTableCell($request);
    }

    /*
     * Test for deleting cell online.
     */
    public function testDeleteTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\DeleteTableCellOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2/rows/0",
            0,
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCell = new \Aspose\Words\Model\TableCellInsert(array(
        ));
        $request = new Requests\InsertTableCellRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            $requestCell,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableCell($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCell());
        Assert::assertEquals("0.0.5.0.3", $result->getCell()->getNodeId());
    }

    /*
     * Test for adding cell online.
     */
    public function testInsertTableCellOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $requestCell = new \Aspose\Words\Model\TableCellInsert(array(
        ));
        $request = new Requests\InsertTableCellOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2/rows/0",
            $requestCell,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableCellOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableCellFormatRequest(
            $remoteFileName,
            "sections/0/tables/2/rows/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCellFormat());
        Assert::assertTrue($result->getCellFormat()->getWrapText());
    }

    /*
     * Test for getting cell format online.
     */
    public function testGetTableCellFormatOnline()
    {
        $localFile = "DocumentElements/Tables/TablesGet.docx";

        $request = new Requests\GetTableCellFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2/rows/0",
            0,
            NULL,
            NULL
        );

        $result = $this->words->getTableCellFormatOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
            "bottom_padding" => 5.0,
            "fit_text" => true,
            "horizontal_merge" => "First",
            "wrap_text" => true,
        ));
        $request = new Requests\UpdateTableCellFormatRequest(
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
            NULL
        );

        $result = $this->words->updateTableCellFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
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

        $requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
            "bottom_padding" => 5,
            "fit_text" => true,
            "horizontal_merge" => "First",
            "wrap_text" => true,
        ));
        $request = new Requests\UpdateTableCellFormatOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "sections/0/tables/2/rows/0",
            $requestFormat,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTableCellFormatOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderTableRequest(
            $remoteFileName,
            "png",
            0,
            "",
            $remoteDataFolder,
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

        $request = new Requests\RenderTableOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            "png",
            0,
            "",
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderTableRequest(
            $remoteFileName,
            "png",
            0,
            NULL,
            $remoteDataFolder,
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