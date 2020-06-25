<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableTests.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
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

use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work wtih table.
 */
class TableTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentElements/Tables";
    private static $localFile = "DocumentElements/Tables/TablesGet.docx";

    /*
     * Test for getting tables.
     */
    public function testGetTables()
    {
        $remoteFileName = "TestGetTables.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for getting tables without node path.
     */
    public function testGetTablesWithoutNodePath()
    {
        $remoteFileName = "TestGetTablesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablesWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTablesWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting table.
     */
    public function testGetTable()
    {
        $remoteFileName = "TestGetTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableRequest(
            $remoteFileName,
            "",
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTable($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting table without node path.
     */
    public function testGetTableWithoutNodePath()
    {
        $remoteFileName = "TestGetTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTableWithoutNodePathRequest(
            $remoteFileName,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting table.
     */
    public function testDeleteTable()
    {
        $remoteFileName = "TestDeleteTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableRequest(
            $remoteFileName,
            "",
            1,
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
     * Test for deleting table without node path.
     */
    public function testDeleteTableWithoutNodePath()
    {
        $remoteFileName = "TestDeleteTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteTableWithoutNodePathRequest(
            $remoteFileName,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteTableWithoutNodePath($request);
    }

    /*
     * Test for adding table.
     */
    public function testInsertTable()
    {
        $remoteFileName = "TestInsertTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new \Aspose\Words\Model\TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ))
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
    }

    /*
     * Test for adding table without node path.
     */
    public function testInsertTableWithoutNodePath()
    {
        $remoteFileName = "TestInsertTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestTable = new \Aspose\Words\Model\TableInsert(array(
            "columns_count" => 5,
            "rows_count" => 4,
        ))
        $request = new Requests\InsertTableWithoutNodePathRequest(
            $remoteFileName,
            $requestTable,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertTableWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting document properties.
     */
    public function testGetTableProperties()
    {
        $remoteFileName = "TestGetTableProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablePropertiesRequest(
            $remoteFileName,
            "",
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTableProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting document properties without node path.
     */
    public function testGetTablePropertiesWithoutNodePath()
    {
        $remoteFileName = "TestGetTablePropertiesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetTablePropertiesWithoutNodePathRequest(
            $remoteFileName,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getTablePropertiesWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating table properties.
     */
    public function testUpdateTableProperties()
    {
        $remoteFileName = "TestUpdateTableProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new \Aspose\Words\Model\TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2,
            "style_options" => "ColumnBands",
        ))
        $request = new Requests\UpdateTablePropertiesRequest(
            $remoteFileName,
            $requestProperties,
            "",
            1,
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
    }

    /*
     * Test for updating table properties without node path.
     */
    public function testUpdateTablePropertiesWithoutNodePath()
    {
        $remoteFileName = "TestUpdateTablePropertiesWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperties = new \Aspose\Words\Model\TableProperties(array(
            "alignment" => "Right",
            "allow_auto_fit" => false,
            "bidi" => true,
            "bottom_padding" => 1,
            "cell_spacing" => 2,
            "style_options" => "ColumnBands",
        ))
        $request = new Requests\UpdateTablePropertiesWithoutNodePathRequest(
            $remoteFileName,
            $requestProperties,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateTablePropertiesWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting table row.
     */
    public function testGetTableRow()
    {
        $remoteFileName = "TestGetTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for deleting table row.
     */
    public function testDeleteTableRow()
    {
        $remoteFileName = "TestDeleteTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
     * Test for adding row.
     */
    public function testInsertTableRow()
    {
        $remoteFileName = "TestInsertTableRow.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRow = new \Aspose\Words\Model\TableRowInsert(array(
            "columns_count" => 5,
        ))
        $request = new Requests\InsertTableRowRequest(
            $remoteFileName,
            $requestRow,
            "sections/0/tables/2",
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
    }

    /*
     * Test for getting row format.
     */
    public function testGetTableRowFormat()
    {
        $remoteFileName = "TestGetTableRowFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test updating row format.
     */
    public function testUpdateTableRowFormat()
    {
        $remoteFileName = "TestUpdateTableRowFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
            "allow_break_across_pages" => true,
            "heading_format" => true,
            "height" => 10,
            "height_rule" => "Auto",
        ))
        $request = new Requests\UpdateTableRowFormatRequest(
            $remoteFileName,
            $requestFormat,
            "sections/0/tables/2",
            0,
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
    }

    /*
     * Test for getting table cell.
     */
    public function testGetTableCell()
    {
        $remoteFileName = "TestGetTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for deleting cell.
     */
    public function testDeleteTableCell()
    {
        $remoteFileName = "TestDeleteTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
     * Test for adding cell.
     */
    public function testInsertTableCell()
    {
        $remoteFileName = "TestInsertTableCell.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCell = new \Aspose\Words\Model\TableCellInsert(array(
        ))
        $request = new Requests\InsertTableCellRequest(
            $remoteFileName,
            $requestCell,
            "sections/0/tables/2/rows/0",
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
    }

    /*
     * Test for getting cell format.
     */
    public function testGetTableCellFormat()
    {
        $remoteFileName = "TestGetTableCellFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
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
    }

    /*
     * Test for updating cell format.
     */
    public function testUpdateTableCellFormat()
    {
        $remoteFileName = "TestUpdateTableCellFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
            "bottom_padding" => 5,
            "fit_text" => true,
            "horizontal_merge" => "First",
            "wrap_text" => true,
        ))
        $request = new Requests\UpdateTableCellFormatRequest(
            $remoteFileName,
            $requestFormat,
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

        $result = $this->words->updateTableCellFormat($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for table rendering.
     */
    public function testRenderTable()
    {
        $remoteFileName = "TestRenderTable.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderTableRequest(
            $remoteFileName,
            "png",
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderTable($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for table rendering without node path.
     */
    public function testRenderTableWithoutNodePath()
    {
        $remoteFileName = "TestRenderTableWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderTableWithoutNodePathRequest(
            $remoteFileName,
            "png",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderTableWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}