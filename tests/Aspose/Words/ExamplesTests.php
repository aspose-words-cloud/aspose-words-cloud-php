<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExamplesTests.php">
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

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{AcceptAllRevisionsRequest, UploadFileRequest};
use Aspose\Words\Model\Requests\{AcceptAllRevisionsOnlineRequest};
use Aspose\Words\Model\Requests\{AppendDocumentRequest};use Aspose\Words\Model\{DocumentEntry, DocumentEntryList};
use Aspose\Words\Model\Requests\{AppendDocumentOnlineRequest};use Aspose\Words\Model\{DocumentEntry, DocumentEntryList};
use Aspose\Words\Model\Requests\{ApplyStyleToDocumentElementRequest};use Aspose\Words\Model\{StyleApply};
use Aspose\Words\Model\Requests\{ApplyStyleToDocumentElementOnlineRequest};use Aspose\Words\Model\{StyleApply};
use Aspose\Words\Model\Requests\{BuildReportRequest};use Aspose\Words\Model\{ReportEngineSettings};
use Aspose\Words\Model\Requests\{BuildReportOnlineRequest};use Aspose\Words\Model\{ReportEngineSettings};
use Aspose\Words\Model\Requests\{ClassifyRequest};
use Aspose\Words\Model\Requests\{ClassifyDocumentRequest};
use Aspose\Words\Model\Requests\{ClassifyDocumentOnlineRequest};
use Aspose\Words\Model\Requests\{CompareDocumentRequest};use Aspose\Words\Model\{CompareData};
use Aspose\Words\Model\Requests\{CompareDocumentOnlineRequest};use Aspose\Words\Model\{CompareData};
use Aspose\Words\Model\Requests\{ConvertDocumentRequest};
use Aspose\Words\Model\Requests\{CopyFileRequest};
use Aspose\Words\Model\Requests\{CopyFolderRequest};
use Aspose\Words\Model\Requests\{CopyStyleRequest};use Aspose\Words\Model\{StyleCopy};
use Aspose\Words\Model\Requests\{CopyStyleOnlineRequest};use Aspose\Words\Model\{StyleCopy};
use Aspose\Words\Model\Requests\{CreateDocumentRequest};
use Aspose\Words\Model\Requests\{CreateFolderRequest};
use Aspose\Words\Model\Requests\{CreateOrUpdateDocumentPropertyRequest};use Aspose\Words\Model\{DocumentPropertyCreateOrUpdate};
use Aspose\Words\Model\Requests\{CreateOrUpdateDocumentPropertyOnlineRequest};use Aspose\Words\Model\{DocumentPropertyCreateOrUpdate};
use Aspose\Words\Model\Requests\{DeleteAllParagraphTabStopsRequest};
use Aspose\Words\Model\Requests\{DeleteAllParagraphTabStopsOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteBorderRequest};
use Aspose\Words\Model\Requests\{DeleteBorderOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteBordersRequest};
use Aspose\Words\Model\Requests\{DeleteBordersOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteCommentRequest};
use Aspose\Words\Model\Requests\{DeleteCommentOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteCommentsRequest};
use Aspose\Words\Model\Requests\{DeleteCommentsOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteCustomXmlPartRequest};
use Aspose\Words\Model\Requests\{DeleteCustomXmlPartOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteCustomXmlPartsRequest};
use Aspose\Words\Model\Requests\{DeleteCustomXmlPartsOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteDocumentPropertyRequest};
use Aspose\Words\Model\Requests\{DeleteDocumentPropertyOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteDrawingObjectRequest};
use Aspose\Words\Model\Requests\{DeleteDrawingObjectOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteFieldRequest};
use Aspose\Words\Model\Requests\{DeleteFieldOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteFieldsRequest};
use Aspose\Words\Model\Requests\{DeleteFieldsOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteFileRequest};
use Aspose\Words\Model\Requests\{DeleteFolderRequest};
use Aspose\Words\Model\Requests\{DeleteFootnoteRequest};
use Aspose\Words\Model\Requests\{DeleteFootnoteOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteFormFieldRequest};
use Aspose\Words\Model\Requests\{DeleteFormFieldOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteHeaderFooterRequest};
use Aspose\Words\Model\Requests\{DeleteHeaderFooterOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteHeadersFootersRequest};
use Aspose\Words\Model\Requests\{DeleteHeadersFootersOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteMacrosRequest};
use Aspose\Words\Model\Requests\{DeleteMacrosOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteOfficeMathObjectRequest};
use Aspose\Words\Model\Requests\{DeleteOfficeMathObjectOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphListFormatRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphListFormatOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphTabStopRequest};
use Aspose\Words\Model\Requests\{DeleteParagraphTabStopOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteRunRequest};
use Aspose\Words\Model\Requests\{DeleteRunOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteSectionRequest};
use Aspose\Words\Model\Requests\{DeleteSectionOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteTableRequest};
use Aspose\Words\Model\Requests\{DeleteTableCellRequest};
use Aspose\Words\Model\Requests\{DeleteTableCellOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteTableOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteTableRowRequest};
use Aspose\Words\Model\Requests\{DeleteTableRowOnlineRequest};
use Aspose\Words\Model\Requests\{DeleteWatermarkRequest};
use Aspose\Words\Model\Requests\{DeleteWatermarkOnlineRequest};
use Aspose\Words\Model\Requests\{DownloadFileRequest};
use Aspose\Words\Model\Requests\{ExecuteMailMergeRequest};
use Aspose\Words\Model\Requests\{ExecuteMailMergeOnlineRequest};
use Aspose\Words\Model\Requests\{GetAvailableFontsRequest};
use Aspose\Words\Model\Requests\{GetBookmarkByNameRequest};
use Aspose\Words\Model\Requests\{GetBookmarkByNameOnlineRequest};
use Aspose\Words\Model\Requests\{GetBookmarksRequest};
use Aspose\Words\Model\Requests\{GetBookmarksOnlineRequest};
use Aspose\Words\Model\Requests\{GetBorderRequest};
use Aspose\Words\Model\Requests\{GetBorderOnlineRequest};
use Aspose\Words\Model\Requests\{GetBordersRequest};
use Aspose\Words\Model\Requests\{GetBordersOnlineRequest};
use Aspose\Words\Model\Requests\{GetCommentRequest};
use Aspose\Words\Model\Requests\{GetCommentOnlineRequest};
use Aspose\Words\Model\Requests\{GetCommentsRequest};
use Aspose\Words\Model\Requests\{GetCommentsOnlineRequest};
use Aspose\Words\Model\Requests\{GetCustomXmlPartRequest};
use Aspose\Words\Model\Requests\{GetCustomXmlPartOnlineRequest};
use Aspose\Words\Model\Requests\{GetCustomXmlPartsRequest};
use Aspose\Words\Model\Requests\{GetCustomXmlPartsOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectByIndexRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectByIndexOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectImageDataRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectImageDataOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectOleDataRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectOleDataOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectsRequest};
use Aspose\Words\Model\Requests\{GetDocumentDrawingObjectsOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentFieldNamesRequest};
use Aspose\Words\Model\Requests\{GetDocumentFieldNamesOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentHyperlinkByIndexRequest};
use Aspose\Words\Model\Requests\{GetDocumentHyperlinkByIndexOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentHyperlinksRequest};
use Aspose\Words\Model\Requests\{GetDocumentHyperlinksOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentPropertiesRequest};
use Aspose\Words\Model\Requests\{GetDocumentPropertiesOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentPropertyRequest};
use Aspose\Words\Model\Requests\{GetDocumentPropertyOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentProtectionRequest};
use Aspose\Words\Model\Requests\{GetDocumentProtectionOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentStatisticsRequest};
use Aspose\Words\Model\Requests\{GetDocumentStatisticsOnlineRequest};
use Aspose\Words\Model\Requests\{GetDocumentWithFormatRequest};
use Aspose\Words\Model\Requests\{GetFieldRequest};
use Aspose\Words\Model\Requests\{GetFieldOnlineRequest};
use Aspose\Words\Model\Requests\{GetFieldsRequest};
use Aspose\Words\Model\Requests\{GetFieldsOnlineRequest};
use Aspose\Words\Model\Requests\{GetFilesListRequest};
use Aspose\Words\Model\Requests\{GetFootnoteRequest};
use Aspose\Words\Model\Requests\{GetFootnoteOnlineRequest};
use Aspose\Words\Model\Requests\{GetFootnotesRequest};
use Aspose\Words\Model\Requests\{GetFootnotesOnlineRequest};
use Aspose\Words\Model\Requests\{GetFormFieldRequest};
use Aspose\Words\Model\Requests\{GetFormFieldOnlineRequest};
use Aspose\Words\Model\Requests\{GetFormFieldsRequest};
use Aspose\Words\Model\Requests\{GetFormFieldsOnlineRequest};
use Aspose\Words\Model\Requests\{GetHeaderFooterRequest};
use Aspose\Words\Model\Requests\{GetHeaderFooterOfSectionRequest};
use Aspose\Words\Model\Requests\{GetHeaderFooterOfSectionOnlineRequest};
use Aspose\Words\Model\Requests\{GetHeaderFooterOnlineRequest};
use Aspose\Words\Model\Requests\{GetHeaderFootersRequest};
use Aspose\Words\Model\Requests\{GetHeaderFootersOnlineRequest};
use Aspose\Words\Model\Requests\{GetListRequest};
use Aspose\Words\Model\Requests\{GetListOnlineRequest};
use Aspose\Words\Model\Requests\{GetListsRequest};
use Aspose\Words\Model\Requests\{GetListsOnlineRequest};
use Aspose\Words\Model\Requests\{GetOfficeMathObjectRequest};
use Aspose\Words\Model\Requests\{GetOfficeMathObjectOnlineRequest};
use Aspose\Words\Model\Requests\{GetOfficeMathObjectsRequest};
use Aspose\Words\Model\Requests\{GetOfficeMathObjectsOnlineRequest};
use Aspose\Words\Model\Requests\{GetParagraphRequest};
use Aspose\Words\Model\Requests\{GetParagraphFormatRequest};
use Aspose\Words\Model\Requests\{GetParagraphFormatOnlineRequest};
use Aspose\Words\Model\Requests\{GetParagraphListFormatRequest};
use Aspose\Words\Model\Requests\{GetParagraphListFormatOnlineRequest};
use Aspose\Words\Model\Requests\{GetParagraphOnlineRequest};
use Aspose\Words\Model\Requests\{GetParagraphsRequest};
use Aspose\Words\Model\Requests\{GetParagraphsOnlineRequest};
use Aspose\Words\Model\Requests\{GetParagraphTabStopsRequest};
use Aspose\Words\Model\Requests\{GetParagraphTabStopsOnlineRequest};
use Aspose\Words\Model\Requests\{GetPublicKeyRequest};
use Aspose\Words\Model\Requests\{GetRangeTextRequest};
use Aspose\Words\Model\Requests\{GetRangeTextOnlineRequest};
use Aspose\Words\Model\Requests\{GetRunRequest};
use Aspose\Words\Model\Requests\{GetRunFontRequest};
use Aspose\Words\Model\Requests\{GetRunFontOnlineRequest};
use Aspose\Words\Model\Requests\{GetRunOnlineRequest};
use Aspose\Words\Model\Requests\{GetRunsRequest};
use Aspose\Words\Model\Requests\{GetRunsOnlineRequest};
use Aspose\Words\Model\Requests\{GetSectionRequest};
use Aspose\Words\Model\Requests\{GetSectionOnlineRequest};
use Aspose\Words\Model\Requests\{GetSectionPageSetupRequest};
use Aspose\Words\Model\Requests\{GetSectionPageSetupOnlineRequest};
use Aspose\Words\Model\Requests\{GetSectionsRequest};
use Aspose\Words\Model\Requests\{GetSectionsOnlineRequest};
use Aspose\Words\Model\Requests\{GetStyleRequest};
use Aspose\Words\Model\Requests\{GetStyleFromDocumentElementRequest};
use Aspose\Words\Model\Requests\{GetStyleFromDocumentElementOnlineRequest};
use Aspose\Words\Model\Requests\{GetStyleOnlineRequest};
use Aspose\Words\Model\Requests\{GetStylesRequest};
use Aspose\Words\Model\Requests\{GetStylesOnlineRequest};
use Aspose\Words\Model\Requests\{GetTableRequest};
use Aspose\Words\Model\Requests\{GetTableCellRequest};
use Aspose\Words\Model\Requests\{GetTableCellFormatRequest};
use Aspose\Words\Model\Requests\{GetTableCellFormatOnlineRequest};
use Aspose\Words\Model\Requests\{GetTableCellOnlineRequest};
use Aspose\Words\Model\Requests\{GetTableOnlineRequest};
use Aspose\Words\Model\Requests\{GetTablePropertiesRequest};
use Aspose\Words\Model\Requests\{GetTablePropertiesOnlineRequest};
use Aspose\Words\Model\Requests\{GetTableRowRequest};
use Aspose\Words\Model\Requests\{GetTableRowFormatRequest};
use Aspose\Words\Model\Requests\{GetTableRowFormatOnlineRequest};
use Aspose\Words\Model\Requests\{GetTableRowOnlineRequest};
use Aspose\Words\Model\Requests\{GetTablesRequest};
use Aspose\Words\Model\Requests\{GetTablesOnlineRequest};
use Aspose\Words\Model\Requests\{InsertCommentRequest};use Aspose\Words\Model\{CommentInsert, DocumentPosition, NodeLink};
use Aspose\Words\Model\Requests\{InsertCommentOnlineRequest};use Aspose\Words\Model\{CommentInsert, DocumentPosition, NodeLink};
use Aspose\Words\Model\Requests\{InsertCustomXmlPartRequest};use Aspose\Words\Model\{CustomXmlPartInsert};
use Aspose\Words\Model\Requests\{InsertCustomXmlPartOnlineRequest};use Aspose\Words\Model\{CustomXmlPartInsert};
use Aspose\Words\Model\Requests\{InsertDrawingObjectRequest};use Aspose\Words\Model\{DrawingObjectInsert};
use Aspose\Words\Model\Requests\{InsertDrawingObjectOnlineRequest};use Aspose\Words\Model\{DrawingObjectInsert};
use Aspose\Words\Model\Requests\{InsertFieldRequest};use Aspose\Words\Model\{FieldInsert};
use Aspose\Words\Model\Requests\{InsertFieldOnlineRequest};use Aspose\Words\Model\{FieldInsert};
use Aspose\Words\Model\Requests\{InsertFootnoteRequest};use Aspose\Words\Model\{FootnoteInsert};
use Aspose\Words\Model\Requests\{InsertFootnoteOnlineRequest};use Aspose\Words\Model\{FootnoteInsert};
use Aspose\Words\Model\Requests\{InsertFormFieldRequest};use Aspose\Words\Model\{FormFieldTextInput};
use Aspose\Words\Model\Requests\{InsertFormFieldOnlineRequest};use Aspose\Words\Model\{FormFieldTextInput};
use Aspose\Words\Model\Requests\{InsertHeaderFooterRequest};
use Aspose\Words\Model\Requests\{InsertHeaderFooterOnlineRequest};
use Aspose\Words\Model\Requests\{InsertListRequest};use Aspose\Words\Model\{ListInsert};
use Aspose\Words\Model\Requests\{InsertListOnlineRequest};use Aspose\Words\Model\{ListInsert};
use Aspose\Words\Model\Requests\{InsertOrUpdateParagraphTabStopRequest};use Aspose\Words\Model\{TabStopInsert};
use Aspose\Words\Model\Requests\{InsertOrUpdateParagraphTabStopOnlineRequest};use Aspose\Words\Model\{TabStopInsert};
use Aspose\Words\Model\Requests\{InsertPageNumbersRequest};use Aspose\Words\Model\{PageNumber};
use Aspose\Words\Model\Requests\{InsertPageNumbersOnlineRequest};use Aspose\Words\Model\{PageNumber};
use Aspose\Words\Model\Requests\{InsertParagraphRequest};use Aspose\Words\Model\{ParagraphInsert};
use Aspose\Words\Model\Requests\{InsertParagraphOnlineRequest};use Aspose\Words\Model\{ParagraphInsert};
use Aspose\Words\Model\Requests\{InsertRunRequest};use Aspose\Words\Model\{RunInsert};
use Aspose\Words\Model\Requests\{InsertRunOnlineRequest};use Aspose\Words\Model\{RunInsert};
use Aspose\Words\Model\Requests\{InsertStyleRequest};use Aspose\Words\Model\{StyleInsert};
use Aspose\Words\Model\Requests\{InsertStyleOnlineRequest};use Aspose\Words\Model\{StyleInsert};
use Aspose\Words\Model\Requests\{InsertTableRequest};use Aspose\Words\Model\{TableInsert};
use Aspose\Words\Model\Requests\{InsertTableCellRequest};use Aspose\Words\Model\{TableCellInsert};
use Aspose\Words\Model\Requests\{InsertTableCellOnlineRequest};use Aspose\Words\Model\{TableCellInsert};
use Aspose\Words\Model\Requests\{InsertTableOnlineRequest};use Aspose\Words\Model\{TableInsert};
use Aspose\Words\Model\Requests\{InsertTableRowRequest};use Aspose\Words\Model\{TableRowInsert};
use Aspose\Words\Model\Requests\{InsertTableRowOnlineRequest};use Aspose\Words\Model\{TableRowInsert};
use Aspose\Words\Model\Requests\{InsertWatermarkImageRequest};
use Aspose\Words\Model\Requests\{InsertWatermarkImageOnlineRequest};
use Aspose\Words\Model\Requests\{InsertWatermarkTextRequest};use Aspose\Words\Model\{WatermarkText};
use Aspose\Words\Model\Requests\{InsertWatermarkTextOnlineRequest};use Aspose\Words\Model\{WatermarkText};
use Aspose\Words\Model\Requests\{LoadWebDocumentRequest};use Aspose\Words\Model\{LoadWebDocumentData, SaveOptionsData};
use Aspose\Words\Model\Requests\{MoveFileRequest};
use Aspose\Words\Model\Requests\{MoveFolderRequest};
use Aspose\Words\Model\Requests\{OptimizeDocumentRequest};use Aspose\Words\Model\{OptimizationOptions};
use Aspose\Words\Model\Requests\{OptimizeDocumentOnlineRequest};use Aspose\Words\Model\{OptimizationOptions};
use Aspose\Words\Model\Requests\{ProtectDocumentRequest};use Aspose\Words\Model\{ProtectionRequest};
use Aspose\Words\Model\Requests\{ProtectDocumentOnlineRequest};use Aspose\Words\Model\{ProtectionRequest};
use Aspose\Words\Model\Requests\{RejectAllRevisionsRequest};
use Aspose\Words\Model\Requests\{RejectAllRevisionsOnlineRequest};
use Aspose\Words\Model\Requests\{RemoveRangeRequest};
use Aspose\Words\Model\Requests\{RemoveRangeOnlineRequest};
use Aspose\Words\Model\Requests\{RenderDrawingObjectRequest};
use Aspose\Words\Model\Requests\{RenderDrawingObjectOnlineRequest};
use Aspose\Words\Model\Requests\{RenderMathObjectRequest};
use Aspose\Words\Model\Requests\{RenderMathObjectOnlineRequest};
use Aspose\Words\Model\Requests\{RenderPageRequest};
use Aspose\Words\Model\Requests\{RenderPageOnlineRequest};
use Aspose\Words\Model\Requests\{RenderParagraphRequest};
use Aspose\Words\Model\Requests\{RenderParagraphOnlineRequest};
use Aspose\Words\Model\Requests\{RenderTableRequest};
use Aspose\Words\Model\Requests\{RenderTableOnlineRequest};
use Aspose\Words\Model\Requests\{ReplaceTextRequest};use Aspose\Words\Model\{ReplaceTextParameters};
use Aspose\Words\Model\Requests\{ReplaceTextOnlineRequest};use Aspose\Words\Model\{ReplaceTextParameters};
use Aspose\Words\Model\Requests\{ReplaceWithTextRequest};use Aspose\Words\Model\{ReplaceRange};
use Aspose\Words\Model\Requests\{ReplaceWithTextOnlineRequest};use Aspose\Words\Model\{ReplaceRange};
use Aspose\Words\Model\Requests\{ResetCacheRequest};
use Aspose\Words\Model\Requests\{SaveAsRequest};use Aspose\Words\Model\{SaveOptionsData};
use Aspose\Words\Model\Requests\{SaveAsOnlineRequest};use Aspose\Words\Model\{SaveOptionsData};
use Aspose\Words\Model\Requests\{SaveAsRangeRequest};use Aspose\Words\Model\{RangeDocument};
use Aspose\Words\Model\Requests\{SaveAsRangeOnlineRequest};use Aspose\Words\Model\{RangeDocument};
use Aspose\Words\Model\Requests\{SaveAsTiffRequest};use Aspose\Words\Model\{TiffSaveOptionsData};
use Aspose\Words\Model\Requests\{SaveAsTiffOnlineRequest};use Aspose\Words\Model\{TiffSaveOptionsData};
use Aspose\Words\Model\Requests\{SearchRequest};
use Aspose\Words\Model\Requests\{SearchOnlineRequest};
use Aspose\Words\Model\Requests\{SplitDocumentRequest};
use Aspose\Words\Model\Requests\{SplitDocumentOnlineRequest};
use Aspose\Words\Model\Requests\{UnprotectDocumentRequest};use Aspose\Words\Model\{ProtectionRequest};
use Aspose\Words\Model\Requests\{UnprotectDocumentOnlineRequest};use Aspose\Words\Model\{ProtectionRequest};
use Aspose\Words\Model\Requests\{UpdateBookmarkRequest};use Aspose\Words\Model\{BookmarkData};
use Aspose\Words\Model\Requests\{UpdateBookmarkOnlineRequest};use Aspose\Words\Model\{BookmarkData};
use Aspose\Words\Model\Requests\{UpdateBorderRequest};use Aspose\Words\Model\{Border, XmlColor};
use Aspose\Words\Model\Requests\{UpdateBorderOnlineRequest};use Aspose\Words\Model\{Border, XmlColor};
use Aspose\Words\Model\Requests\{UpdateCommentRequest};use Aspose\Words\Model\{CommentUpdate, DocumentPosition, NodeLink};
use Aspose\Words\Model\Requests\{UpdateCommentOnlineRequest};use Aspose\Words\Model\{CommentUpdate, DocumentPosition, NodeLink};
use Aspose\Words\Model\Requests\{UpdateCustomXmlPartRequest};use Aspose\Words\Model\{CustomXmlPartUpdate};
use Aspose\Words\Model\Requests\{UpdateCustomXmlPartOnlineRequest};use Aspose\Words\Model\{CustomXmlPartUpdate};
use Aspose\Words\Model\Requests\{UpdateDrawingObjectRequest};use Aspose\Words\Model\{DrawingObjectUpdate};
use Aspose\Words\Model\Requests\{UpdateDrawingObjectOnlineRequest};use Aspose\Words\Model\{DrawingObjectUpdate};
use Aspose\Words\Model\Requests\{UpdateFieldRequest};use Aspose\Words\Model\{FieldUpdate};
use Aspose\Words\Model\Requests\{UpdateFieldOnlineRequest};use Aspose\Words\Model\{FieldUpdate};
use Aspose\Words\Model\Requests\{UpdateFieldsRequest};
use Aspose\Words\Model\Requests\{UpdateFieldsOnlineRequest};
use Aspose\Words\Model\Requests\{UpdateFootnoteRequest};use Aspose\Words\Model\{FootnoteUpdate};
use Aspose\Words\Model\Requests\{UpdateFootnoteOnlineRequest};use Aspose\Words\Model\{FootnoteUpdate};
use Aspose\Words\Model\Requests\{UpdateFormFieldRequest};use Aspose\Words\Model\{FormFieldTextInput};
use Aspose\Words\Model\Requests\{UpdateFormFieldOnlineRequest};use Aspose\Words\Model\{FormFieldTextInput};
use Aspose\Words\Model\Requests\{UpdateListRequest};use Aspose\Words\Model\{ListUpdate};
use Aspose\Words\Model\Requests\{UpdateListLevelRequest};use Aspose\Words\Model\{ListLevelUpdate};
use Aspose\Words\Model\Requests\{UpdateListLevelOnlineRequest};use Aspose\Words\Model\{ListLevelUpdate};
use Aspose\Words\Model\Requests\{UpdateListOnlineRequest};use Aspose\Words\Model\{ListUpdate};
use Aspose\Words\Model\Requests\{UpdateParagraphFormatRequest};use Aspose\Words\Model\{ParagraphFormatUpdate};
use Aspose\Words\Model\Requests\{UpdateParagraphFormatOnlineRequest};use Aspose\Words\Model\{ParagraphFormatUpdate};
use Aspose\Words\Model\Requests\{UpdateParagraphListFormatRequest};use Aspose\Words\Model\{ListFormatUpdate};
use Aspose\Words\Model\Requests\{UpdateParagraphListFormatOnlineRequest};use Aspose\Words\Model\{ListFormatUpdate};
use Aspose\Words\Model\Requests\{UpdateRunRequest};use Aspose\Words\Model\{RunUpdate};
use Aspose\Words\Model\Requests\{UpdateRunFontRequest};use Aspose\Words\Model\{Font};
use Aspose\Words\Model\Requests\{UpdateRunFontOnlineRequest};use Aspose\Words\Model\{Font};
use Aspose\Words\Model\Requests\{UpdateRunOnlineRequest};use Aspose\Words\Model\{RunUpdate};
use Aspose\Words\Model\Requests\{UpdateSectionPageSetupRequest};use Aspose\Words\Model\{PageSetup};
use Aspose\Words\Model\Requests\{UpdateSectionPageSetupOnlineRequest};use Aspose\Words\Model\{PageSetup};
use Aspose\Words\Model\Requests\{UpdateStyleRequest};use Aspose\Words\Model\{StyleUpdate};
use Aspose\Words\Model\Requests\{UpdateStyleOnlineRequest};use Aspose\Words\Model\{StyleUpdate};
use Aspose\Words\Model\Requests\{UpdateTableCellFormatRequest};use Aspose\Words\Model\{TableCellFormat};
use Aspose\Words\Model\Requests\{UpdateTableCellFormatOnlineRequest};use Aspose\Words\Model\{TableCellFormat};
use Aspose\Words\Model\Requests\{UpdateTablePropertiesRequest};use Aspose\Words\Model\{TableProperties};
use Aspose\Words\Model\Requests\{UpdateTablePropertiesOnlineRequest};use Aspose\Words\Model\{TableProperties};
use Aspose\Words\Model\Requests\{UpdateTableRowFormatRequest};use Aspose\Words\Model\{TableRowFormat};
use Aspose\Words\Model\Requests\{UpdateTableRowFormatOnlineRequest};use Aspose\Words\Model\{TableRowFormat};
use Aspose\Words\Model\Requests\{UploadFileRequest};
use PHPUnit\Framework\Assert;

class ExamplesTests extends BaseTestContext
{
    public function setUp() : void
    {
        parent::setUp();
    }

    public function testExampleAcceptAllRevisions()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $fileName  = "test_doc.docx";

      /**
       * Upload original document to cloud storage.
       */
      $myVar1 = $documentsDir . $fileName;
      $myVar2 = $fileName;
      $uploadFileRequest = new UploadFileRequest(
          $myVar1, $myVar2, NULL
      );
      $wordsApi->uploadFile($uploadFileRequest);

      /**
       * Calls AcceptAllRevisions method for document in cloud.
       */
      $myVar3 = $fileName;
      $request = new AcceptAllRevisionsRequest(
          $myVar3, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->acceptAllRevisions($request);
    }

    public function testExampleAcceptAllRevisionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $acceptRequest = new AcceptAllRevisionsOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->acceptAllRevisionsOnline($acceptRequest);
    }

    public function testExampleAppendDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $remoteFileName = "Sample.docx";

      $requestDocumentListDocumentEntries0 = new DocumentEntry(array(
          "href" => $remoteFileName,
          "import_format_mode" => "KeepSourceFormatting",
      ));
      $requestDocumentListDocumentEntries = [
          $requestDocumentListDocumentEntries0,
      ];
      $requestDocumentList = new DocumentEntryList(array(
          "document_entries" => $requestDocumentListDocumentEntries,
      ));
      $appendRequest = new AppendDocumentRequest(
          $remoteFileName, $requestDocumentList, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->appendDocument($appendRequest);
    }

    public function testExampleAppendDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestDocumentListDocumentEntries0 = new DocumentEntry(array(
          "href" => "Sample.docx",
          "import_format_mode" => "KeepSourceFormatting",
      ));
      $requestDocumentListDocumentEntries = [
          $requestDocumentListDocumentEntries0,
      ];
      $requestDocumentList = new DocumentEntryList(array(
          "document_entries" => $requestDocumentListDocumentEntries,
      ));
      $appendRequest = new AppendDocumentOnlineRequest(
          $requestDocument, $requestDocumentList, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->appendDocumentOnline($appendRequest);
    }

    public function testExampleApplyStyleToDocumentElement()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestStyleApply = new StyleApply(array(
          "style_name" => "Heading 1",
      ));
      $applyStyleRequest = new ApplyStyleToDocumentElementRequest(
          "Sample.docx", "paragraphs/1/paragraphFormat", $requestStyleApply, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->applyStyleToDocumentElement($applyStyleRequest);
    }

    public function testExampleApplyStyleToDocumentElementOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestStyleApply = new StyleApply(array(
          "style_name" => "Heading 1",
      ));
      $applyStyleRequest = new ApplyStyleToDocumentElementOnlineRequest(
          $requestDocument, "paragraphs/1/paragraphFormat", $requestStyleApply, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->applyStyleToDocumentElementOnline($applyStyleRequest);
    }

    public function testExampleBuildReport()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestReportEngineSettingsReportBuildOptions = [
          "AllowMissingMembers",
          "RemoveEmptyParagraphs",
      ];
      $requestReportEngineSettings = new ReportEngineSettings(array(
          "data_source_type" => "Json",
          "report_build_options" => $requestReportEngineSettingsReportBuildOptions,
      ));
      $buildReportRequest = new BuildReportRequest(
          "Sample.docx", "Data.json", $requestReportEngineSettings, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->buildReport($buildReportRequest);
    }

    public function testExampleBuildReportOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestTemplate = $documentsDir . "Sample.docx";
      $requestReportEngineSettings = new ReportEngineSettings(array(
          "data_source_type" => "Json",
          "data_source_name" => "persons",
      ));
      $buildReportRequest = new BuildReportOnlineRequest(
          $requestTemplate, "Data.json", $requestReportEngineSettings, NULL
      );
      $wordsApi->buildReportOnline($buildReportRequest);
    }

    public function testExampleClassify()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $classifyRequest = new ClassifyRequest(
          "Try text classification", "3"
      );
      $wordsApi->classify($classifyRequest);
    }

    public function testExampleClassifyDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $classifyRequest = new ClassifyDocumentRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, "3", NULL
      );
      $wordsApi->classifyDocument($classifyRequest);
    }

    public function testExampleClassifyDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $classifyRequest = new ClassifyDocumentOnlineRequest(
          $requestDocument, NULL, NULL, "3", NULL
      );
      $wordsApi->classifyDocumentOnline($classifyRequest);
    }

    public function testExampleCompareDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCompareData = new CompareData(array(
          "author" => "author",
          "comparing_with_document" => "TestCompareDocument2.doc",
          "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
      ));
      $compareRequest = new CompareDocumentRequest(
          "TestCompareDocument1.doc", $requestCompareData, NULL, NULL, NULL, NULL, "/TestCompareDocumentOut.doc"
      );
      $wordsApi->compareDocument($compareRequest);
    }

    public function testExampleCompareDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "compareTestDoc1.doc";
      $requestCompareData = new CompareData(array(
          "author" => "author",
          "comparing_with_document" => "TestCompareDocument2.doc",
          "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
      ));
      $requestComparingDocument = $documentsDir . "compareTestDoc2.doc";
      $compareRequest = new CompareDocumentOnlineRequest(
          $requestDocument, $requestCompareData, $requestComparingDocument, NULL, NULL, "/TestCompareDocumentOut.doc"
      );
      $wordsApi->compareDocumentOnline($compareRequest);
    }

    public function testExampleConvertDocument()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $convertRequest = new ConvertDocumentRequest(
          $requestDocument, "pdf", NULL, NULL, NULL, NULL
      );
      $wordsApi->convertDocument($convertRequest);
    }

    public function testExampleCopyFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $copyRequest = new CopyFileRequest(
          "/TestCopyFileDest.docx", "Sample.docx", NULL, NULL, NULL
      );
      $wordsApi->copyFile($copyRequest);
    }

    public function testExampleCopyFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $folderToCopy = "/TestCopyFolder";

      $copyRequest = new CopyFolderRequest(
          $folderToCopy . "Dest", $folderToCopy . "Src", NULL, NULL
      );
      $wordsApi->copyFolder($copyRequest);
    }

    public function testExampleCopyStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestStyleCopy = new StyleCopy(array(
          "style_name" => "Heading 1",
      ));
      $copyRequest = new CopyStyleRequest(
          "Sample.docx", $requestStyleCopy, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->copyStyle($copyRequest);
    }

    public function testExampleCopyStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestStyleCopy = new StyleCopy(array(
          "style_name" => "Heading 1",
      ));
      $copyRequest = new CopyStyleOnlineRequest(
          $requestDocument, $requestStyleCopy, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->copyStyleOnline($copyRequest);
    }

    public function testExampleCreateDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $createRequest = new CreateDocumentRequest(
          "Sample.docx", NULL, NULL
      );
      $wordsApi->createDocument($createRequest);
    }

    public function testExampleCreateFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $createRequest = new CreateFolderRequest(
          "/TestCreateFolder", NULL
      );
      $wordsApi->createFolder($createRequest);
    }

    public function testExampleCreateOrUpdateDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestProperty = new DocumentPropertyCreateOrUpdate(array(
          "value" => "Imran Anwar",
      ));
      $createRequest = new CreateOrUpdateDocumentPropertyRequest(
          "Sample.docx", "AsposeAuthor", $requestProperty, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->createOrUpdateDocumentProperty($createRequest);
    }

    public function testExampleCreateOrUpdateDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestProperty = new DocumentPropertyCreateOrUpdate(array(
          "value" => "Imran Anwar",
      ));
      $createRequest = new CreateOrUpdateDocumentPropertyOnlineRequest(
          $requestDocument, "AsposeAuthor", $requestProperty, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->createOrUpdateDocumentPropertyOnline($createRequest);
    }

    public function testExampleDeleteAllParagraphTabStops()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteAllParagraphTabStopsRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteAllParagraphTabStops($deleteRequest);
    }

    public function testExampleDeleteAllParagraphTabStopsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteAllParagraphTabStopsOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteAllParagraphTabStopsOnline($deleteRequest);
    }

    public function testExampleDeleteBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteBorderRequest(
          "Sample.docx", "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteBorder($deleteRequest);
    }

    public function testExampleDeleteBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteBorderOnlineRequest(
          $requestDocument, "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteBorderOnline($deleteRequest);
    }

    public function testExampleDeleteBorders()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteBordersRequest(
          "Sample.docx", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteBorders($deleteRequest);
    }

    public function testExampleDeleteBordersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteBordersOnlineRequest(
          $requestDocument, "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteBordersOnline($deleteRequest);
    }

    public function testExampleDeleteComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteCommentRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteComment($deleteRequest);
    }

    public function testExampleDeleteCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteCommentOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCommentOnline($deleteRequest);
    }

    public function testExampleDeleteComments()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteCommentsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteComments($deleteRequest);
    }

    public function testExampleDeleteCommentsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteCommentsOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCommentsOnline($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteCustomXmlPartRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCustomXmlPart($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteCustomXmlPartOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCustomXmlPartOnline($deleteRequest);
    }

    public function testExampleDeleteCustomXmlParts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteCustomXmlPartsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCustomXmlParts($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPartsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteCustomXmlPartsOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteCustomXmlPartsOnline($deleteRequest);
    }

    public function testExampleDeleteDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteDocumentPropertyRequest(
          "Sample.docx", "testProp", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteDocumentProperty($deleteRequest);
    }

    public function testExampleDeleteDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteDocumentPropertyOnlineRequest(
          $requestDocument, "testProp", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteDocumentPropertyOnline($deleteRequest);
    }

    public function testExampleDeleteDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteDrawingObjectRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteDrawingObject($deleteRequest);
    }

    public function testExampleDeleteDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteDrawingObjectOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteDrawingObjectOnline($deleteRequest);
    }

    public function testExampleDeleteField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFieldRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteField($deleteRequest);
    }

    public function testExampleDeleteFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteFieldOnlineRequest(
          $requestDocument, 0, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFieldOnline($deleteRequest);
    }

    public function testExampleDeleteFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFieldsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFields($deleteRequest);
    }

    public function testExampleDeleteFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteFieldsOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFieldsOnline($deleteRequest);
    }

    public function testExampleDeleteFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFileRequest(
          "Sample.docx", NULL, NULL
      );
      $wordsApi->deleteFile($deleteRequest);
    }

    public function testExampleDeleteFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFolderRequest(
          "", NULL, NULL
      );
      $wordsApi->deleteFolder($deleteRequest);
    }

    public function testExampleDeleteFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFootnoteRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFootnote($deleteRequest);
    }

    public function testExampleDeleteFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $deleteRequest = new DeleteFootnoteOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFootnoteOnline($deleteRequest);
    }

    public function testExampleDeleteFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteFormFieldRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFormField($deleteRequest);
    }

    public function testExampleDeleteFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteFormFieldOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteFormFieldOnline($deleteRequest);
    }

    public function testExampleDeleteHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteHeaderFooterRequest(
          "Sample.docx", "", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteHeaderFooter($deleteRequest);
    }

    public function testExampleDeleteHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $deleteRequest = new DeleteHeaderFooterOnlineRequest(
          $requestDocument, "", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteHeaderFooterOnline($deleteRequest);
    }

    public function testExampleDeleteHeadersFooters()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteHeadersFootersRequest(
          "Sample.docx", "", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteHeadersFooters($deleteRequest);
    }

    public function testExampleDeleteHeadersFootersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $deleteRequest = new DeleteHeadersFootersOnlineRequest(
          $requestDocument, "", NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteHeadersFootersOnline($deleteRequest);
    }

    public function testExampleDeleteMacros()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteMacrosRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteMacros($deleteRequest);
    }

    public function testExampleDeleteMacrosOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteMacrosOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteMacrosOnline($deleteRequest);
    }

    public function testExampleDeleteOfficeMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteOfficeMathObjectRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteOfficeMathObject($deleteRequest);
    }

    public function testExampleDeleteOfficeMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteOfficeMathObjectOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteOfficeMathObjectOnline($deleteRequest);
    }

    public function testExampleDeleteParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteParagraphRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraph($deleteRequest);
    }

    public function testExampleDeleteParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteParagraphListFormatRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraphListFormat($deleteRequest);
    }

    public function testExampleDeleteParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $deleteRequest = new DeleteParagraphListFormatOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraphListFormatOnline($deleteRequest);
    }

    public function testExampleDeleteParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteParagraphOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraphOnline($deleteRequest);
    }

    public function testExampleDeleteParagraphTabStop()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteParagraphTabStopRequest(
          "Sample.docx", 72.0, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraphTabStop($deleteRequest);
    }

    public function testExampleDeleteParagraphTabStopOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteParagraphTabStopOnlineRequest(
          $requestDocument, 72.0, 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteParagraphTabStopOnline($deleteRequest);
    }

    public function testExampleDeleteRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteRunRequest(
          "Sample.docx", "paragraphs/1", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteRun($deleteRequest);
    }

    public function testExampleDeleteRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $deleteRequest = new DeleteRunOnlineRequest(
          $requestDocument, "paragraphs/1", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteRunOnline($deleteRequest);
    }

    public function testExampleDeleteSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteSectionRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteSection($deleteRequest);
    }

    public function testExampleDeleteSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteSectionOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteSectionOnline($deleteRequest);
    }

    public function testExampleDeleteTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteTableRequest(
          "Sample.docx", 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTable($deleteRequest);
    }

    public function testExampleDeleteTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteTableCellRequest(
          "Sample.docx", "sections/0/tables/2/rows/0", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTableCell($deleteRequest);
    }

    public function testExampleDeleteTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteTableCellOnlineRequest(
          $requestDocument, "sections/0/tables/2/rows/0", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTableCellOnline($deleteRequest);
    }

    public function testExampleDeleteTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteTableOnlineRequest(
          $requestDocument, 1, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTableOnline($deleteRequest);
    }

    public function testExampleDeleteTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteTableRowRequest(
          "Sample.docx", "tables/1", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTableRow($deleteRequest);
    }

    public function testExampleDeleteTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteTableRowOnlineRequest(
          $requestDocument, "tables/1", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteTableRowOnline($deleteRequest);
    }

    public function testExampleDeleteWatermark()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $deleteRequest = new DeleteWatermarkRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteWatermark($deleteRequest);
    }

    public function testExampleDeleteWatermarkOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $deleteRequest = new DeleteWatermarkOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->deleteWatermarkOnline($deleteRequest);
    }

    public function testExampleDownloadFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $downloadRequest = new DownloadFileRequest(
          "Sample.docx", NULL, NULL
      );
      $wordsApi->downloadFile($downloadRequest);
    }

    public function testExampleExecuteMailMerge()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $mailMergeRequest = new ExecuteMailMergeRequest(
          "Sample.docx", "TestExecuteTemplateData.txt", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->executeMailMerge($mailMergeRequest);
    }

    public function testExampleExecuteMailMergeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestTemplate = $documentsDir . "TestExecuteTemplate.doc";
      $requestData = $documentsDir . "TestExecuteTemplateData.txt";
      $mailMergeRequest = new ExecuteMailMergeOnlineRequest(
          $requestTemplate, $requestData, NULL, NULL, NULL
      );
      $wordsApi->executeMailMergeOnline($mailMergeRequest);
    }

    public function testExampleGetAvailableFonts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetAvailableFontsRequest(
          NULL
      );
      $wordsApi->getAvailableFonts($request);
    }

    public function testExampleGetBookmarkByName()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetBookmarkByNameRequest(
          "Sample.docx", "aspose", NULL, NULL, NULL, NULL
      );
      $wordsApi->getBookmarkByName($request);
    }

    public function testExampleGetBookmarkByNameOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetBookmarkByNameOnlineRequest(
          $requestDocument, "aspose", NULL, NULL
      );
      $wordsApi->getBookmarkByNameOnline($request);
    }

    public function testExampleGetBookmarks()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetBookmarksRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getBookmarks($request);
    }

    public function testExampleGetBookmarksOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetBookmarksOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getBookmarksOnline($request);
    }

    public function testExampleGetBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetBorderRequest(
          "Sample.docx", "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL
      );
      $wordsApi->getBorder($request);
    }

    public function testExampleGetBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetBorderOnlineRequest(
          $requestDocument, "left", "tables/1/rows/0/cells/0", NULL, NULL
      );
      $wordsApi->getBorderOnline($request);
    }

    public function testExampleGetBorders()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetBordersRequest(
          "Sample.docx", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL
      );
      $wordsApi->getBorders($request);
    }

    public function testExampleGetBordersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetBordersOnlineRequest(
          $requestDocument, "tables/1/rows/0/cells/0", NULL, NULL
      );
      $wordsApi->getBordersOnline($request);
    }

    public function testExampleGetComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetCommentRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getComment($request);
    }

    public function testExampleGetCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetCommentOnlineRequest(
          $requestDocument, 0, NULL, NULL
      );
      $wordsApi->getCommentOnline($request);
    }

    public function testExampleGetComments()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetCommentsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getComments($request);
    }

    public function testExampleGetCommentsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetCommentsOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getCommentsOnline($request);
    }

    public function testExampleGetCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetCustomXmlPartRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getCustomXmlPart($request);
    }

    public function testExampleGetCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetCustomXmlPartOnlineRequest(
          $requestDocument, 0, NULL, NULL
      );
      $wordsApi->getCustomXmlPartOnline($request);
    }

    public function testExampleGetCustomXmlParts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetCustomXmlPartsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getCustomXmlParts($request);
    }

    public function testExampleGetCustomXmlPartsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetCustomXmlPartsOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getCustomXmlPartsOnline($request);
    }

    public function testExampleGetDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocument($request);
    }

    public function testExampleGetDocumentDrawingObjectByIndex()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentDrawingObjectByIndexRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectByIndex($request);
    }

    public function testExampleGetDocumentDrawingObjectByIndexOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentDrawingObjectByIndexOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectByIndexOnline($request);
    }

    public function testExampleGetDocumentDrawingObjectImageData()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentDrawingObjectImageDataRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectImageData($request);
    }

    public function testExampleGetDocumentDrawingObjectImageDataOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentDrawingObjectImageDataOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectImageDataOnline($request);
    }

    public function testExampleGetDocumentDrawingObjectOleData()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentDrawingObjectOleDataRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectOleData($request);
    }

    public function testExampleGetDocumentDrawingObjectOleDataOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentDrawingObjectOleDataOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectOleDataOnline($request);
    }

    public function testExampleGetDocumentDrawingObjects()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentDrawingObjectsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjects($request);
    }

    public function testExampleGetDocumentDrawingObjectsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentDrawingObjectsOnlineRequest(
          $requestDocument, "sections/0", NULL, NULL
      );
      $wordsApi->getDocumentDrawingObjectsOnline($request);
    }

    public function testExampleGetDocumentFieldNames()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentFieldNamesRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentFieldNames($request);
    }

    public function testExampleGetDocumentFieldNamesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestTemplate = $documentsDir . "Sample.docx";
      $request = new GetDocumentFieldNamesOnlineRequest(
          $requestTemplate, NULL, NULL, true
      );
      $wordsApi->getDocumentFieldNamesOnline($request);
    }

    public function testExampleGetDocumentHyperlinkByIndex()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentHyperlinkByIndexRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentHyperlinkByIndex($request);
    }

    public function testExampleGetDocumentHyperlinkByIndexOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentHyperlinkByIndexOnlineRequest(
          $requestDocument, 0, NULL, NULL
      );
      $wordsApi->getDocumentHyperlinkByIndexOnline($request);
    }

    public function testExampleGetDocumentHyperlinks()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentHyperlinksRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentHyperlinks($request);
    }

    public function testExampleGetDocumentHyperlinksOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentHyperlinksOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getDocumentHyperlinksOnline($request);
    }

    public function testExampleGetDocumentProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentPropertiesRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentProperties($request);
    }

    public function testExampleGetDocumentPropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentPropertiesOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getDocumentPropertiesOnline($request);
    }

    public function testExampleGetDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentPropertyRequest(
          "Sample.docx", "Author", NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentProperty($request);
    }

    public function testExampleGetDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentPropertyOnlineRequest(
          $requestDocument, "Author", NULL, NULL
      );
      $wordsApi->getDocumentPropertyOnline($request);
    }

    public function testExampleGetDocumentProtection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentProtectionRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentProtection($request);
    }

    public function testExampleGetDocumentProtectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentProtectionOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getDocumentProtectionOnline($request);
    }

    public function testExampleGetDocumentStatistics()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentStatisticsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentStatistics($request);
    }

    public function testExampleGetDocumentStatisticsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetDocumentStatisticsOnlineRequest(
          $requestDocument, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getDocumentStatisticsOnline($request);
    }

    public function testExampleGetDocumentWithFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetDocumentWithFormatRequest(
          "Sample.docx", "text", NULL, NULL, NULL, NULL, "/TestGetDocumentWithFormatAndOutPath.text", NULL
      );
      $wordsApi->getDocumentWithFormat($request);
    }

    public function testExampleGetField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFieldRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getField($request);
    }

    public function testExampleGetFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetFieldOnlineRequest(
          $requestDocument, 0, "sections/0/paragraphs/0", NULL, NULL
      );
      $wordsApi->getFieldOnline($request);
    }

    public function testExampleGetFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFieldsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getFields($request);
    }

    public function testExampleGetFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetFieldsOnlineRequest(
          $requestDocument, "sections/0", NULL, NULL
      );
      $wordsApi->getFieldsOnline($request);
    }

    public function testExampleGetFilesList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFilesListRequest(
          "", NULL
      );
      $wordsApi->getFilesList($request);
    }

    public function testExampleGetFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFootnoteRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getFootnote($request);
    }

    public function testExampleGetFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetFootnoteOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getFootnoteOnline($request);
    }

    public function testExampleGetFootnotes()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFootnotesRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getFootnotes($request);
    }

    public function testExampleGetFootnotesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetFootnotesOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->getFootnotesOnline($request);
    }

    public function testExampleGetFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFormFieldRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getFormField($request);
    }

    public function testExampleGetFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetFormFieldOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL
      );
      $wordsApi->getFormFieldOnline($request);
    }

    public function testExampleGetFormFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetFormFieldsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getFormFields($request);
    }

    public function testExampleGetFormFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetFormFieldsOnlineRequest(
          $requestDocument, "sections/0", NULL, NULL
      );
      $wordsApi->getFormFieldsOnline($request);
    }

    public function testExampleGetHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetHeaderFooterRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getHeaderFooter($request);
    }

    public function testExampleGetHeaderFooterOfSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetHeaderFooterOfSectionRequest(
          "Sample.docx", 0, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getHeaderFooterOfSection($request);
    }

    public function testExampleGetHeaderFooterOfSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetHeaderFooterOfSectionOnlineRequest(
          $requestDocument, 0, 0, NULL, NULL, NULL
      );
      $wordsApi->getHeaderFooterOfSectionOnline($request);
    }

    public function testExampleGetHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetHeaderFooterOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getHeaderFooterOnline($request);
    }

    public function testExampleGetHeaderFooters()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetHeaderFootersRequest(
          "Sample.docx", "", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getHeaderFooters($request);
    }

    public function testExampleGetHeaderFootersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetHeaderFootersOnlineRequest(
          $requestDocument, "", NULL, NULL, NULL
      );
      $wordsApi->getHeaderFootersOnline($request);
    }

    public function testExampleGetList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetListRequest(
          "TestGetLists.doc", 1, NULL, NULL, NULL, NULL
      );
      $wordsApi->getList($request);
    }

    public function testExampleGetListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetListOnlineRequest(
          $requestDocument, 1, NULL, NULL
      );
      $wordsApi->getListOnline($request);
    }

    public function testExampleGetLists()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetListsRequest(
          "TestGetLists.doc", NULL, NULL, NULL, NULL
      );
      $wordsApi->getLists($request);
    }

    public function testExampleGetListsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetListsOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getListsOnline($request);
    }

    public function testExampleGetOfficeMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetOfficeMathObjectRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getOfficeMathObject($request);
    }

    public function testExampleGetOfficeMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetOfficeMathObjectOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getOfficeMathObjectOnline($request);
    }

    public function testExampleGetOfficeMathObjects()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetOfficeMathObjectsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getOfficeMathObjects($request);
    }

    public function testExampleGetOfficeMathObjectsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetOfficeMathObjectsOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->getOfficeMathObjectsOnline($request);
    }

    public function testExampleGetParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetParagraphRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getParagraph($request);
    }

    public function testExampleGetParagraphFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetParagraphFormatRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getParagraphFormat($request);
    }

    public function testExampleGetParagraphFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetParagraphFormatOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getParagraphFormatOnline($request);
    }

    public function testExampleGetParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetParagraphListFormatRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getParagraphListFormat($request);
    }

    public function testExampleGetParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetParagraphListFormatOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getParagraphListFormatOnline($request);
    }

    public function testExampleGetParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetParagraphOnlineRequest(
          $requestDocument, 0, "sections/0", NULL, NULL
      );
      $wordsApi->getParagraphOnline($request);
    }

    public function testExampleGetParagraphs()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetParagraphsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getParagraphs($request);
    }

    public function testExampleGetParagraphsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetParagraphsOnlineRequest(
          $requestDocument, "sections/0", NULL, NULL
      );
      $wordsApi->getParagraphsOnline($request);
    }

    public function testExampleGetParagraphTabStops()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetParagraphTabStopsRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getParagraphTabStops($request);
    }

    public function testExampleGetParagraphTabStopsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetParagraphTabStopsOnlineRequest(
          $requestDocument, 0, NULL, NULL, NULL
      );
      $wordsApi->getParagraphTabStopsOnline($request);
    }

    public function testExampleGetPublicKey()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetPublicKeyRequest(
      );
      $wordsApi->getPublicKey($request);
    }

    public function testExampleGetRangeText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetRangeTextRequest(
          "Sample.docx", "id0.0.0", "id0.0.1", NULL, NULL, NULL, NULL
      );
      $wordsApi->getRangeText($request);
    }

    public function testExampleGetRangeTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $request = new GetRangeTextOnlineRequest(
          $requestDocument, "id0.0.0", "id0.0.1", NULL, NULL
      );
      $wordsApi->getRangeTextOnline($request);
    }

    public function testExampleGetRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetRunRequest(
          "Sample.docx", "paragraphs/0", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getRun($request);
    }

    public function testExampleGetRunFont()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetRunFontRequest(
          "Sample.docx", "paragraphs/0", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getRunFont($request);
    }

    public function testExampleGetRunFontOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetRunFontOnlineRequest(
          $requestDocument, "paragraphs/0", 0, NULL, NULL
      );
      $wordsApi->getRunFontOnline($request);
    }

    public function testExampleGetRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetRunOnlineRequest(
          $requestDocument, "paragraphs/0", 0, NULL, NULL
      );
      $wordsApi->getRunOnline($request);
    }

    public function testExampleGetRuns()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetRunsRequest(
          "Sample.docx", "sections/0/paragraphs/0", NULL, NULL, NULL, NULL
      );
      $wordsApi->getRuns($request);
    }

    public function testExampleGetRunsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetRunsOnlineRequest(
          $requestDocument, "sections/0/paragraphs/0", NULL, NULL
      );
      $wordsApi->getRunsOnline($request);
    }

    public function testExampleGetSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetSectionRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getSection($request);
    }

    public function testExampleGetSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetSectionOnlineRequest(
          $requestDocument, 0, NULL, NULL
      );
      $wordsApi->getSectionOnline($request);
    }

    public function testExampleGetSectionPageSetup()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetSectionPageSetupRequest(
          "Sample.docx", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getSectionPageSetup($request);
    }

    public function testExampleGetSectionPageSetupOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetSectionPageSetupOnlineRequest(
          $requestDocument, 0, NULL, NULL
      );
      $wordsApi->getSectionPageSetupOnline($request);
    }

    public function testExampleGetSections()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetSectionsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getSections($request);
    }

    public function testExampleGetSectionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetSectionsOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getSectionsOnline($request);
    }

    public function testExampleGetStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetStyleRequest(
          "Sample.docx", "Heading 1", NULL, NULL, NULL, NULL
      );
      $wordsApi->getStyle($request);
    }

    public function testExampleGetStyleFromDocumentElement()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetStyleFromDocumentElementRequest(
          "Sample.docx", "paragraphs/1/paragraphFormat", NULL, NULL, NULL, NULL
      );
      $wordsApi->getStyleFromDocumentElement($request);
    }

    public function testExampleGetStyleFromDocumentElementOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetStyleFromDocumentElementOnlineRequest(
          $requestDocument, "paragraphs/1/paragraphFormat", NULL, NULL
      );
      $wordsApi->getStyleFromDocumentElementOnline($request);
    }

    public function testExampleGetStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetStyleOnlineRequest(
          $requestDocument, "Heading 1", NULL, NULL
      );
      $wordsApi->getStyleOnline($request);
    }

    public function testExampleGetStyles()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetStylesRequest(
          "Sample.docx", NULL, NULL, NULL, NULL
      );
      $wordsApi->getStyles($request);
    }

    public function testExampleGetStylesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetStylesOnlineRequest(
          $requestDocument, NULL, NULL
      );
      $wordsApi->getStylesOnline($request);
    }

    public function testExampleGetTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTableRequest(
          "Sample.docx", 1, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTable($request);
    }

    public function testExampleGetTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTableCellRequest(
          "Sample.docx", "sections/0/tables/2/rows/0", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTableCell($request);
    }

    public function testExampleGetTableCellFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTableCellFormatRequest(
          "Sample.docx", "sections/0/tables/2/rows/0", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTableCellFormat($request);
    }

    public function testExampleGetTableCellFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTableCellFormatOnlineRequest(
          $requestDocument, "sections/0/tables/2/rows/0", 0, NULL, NULL
      );
      $wordsApi->getTableCellFormatOnline($request);
    }

    public function testExampleGetTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTableCellOnlineRequest(
          $requestDocument, "sections/0/tables/2/rows/0", 0, NULL, NULL
      );
      $wordsApi->getTableCellOnline($request);
    }

    public function testExampleGetTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTableOnlineRequest(
          $requestDocument, 1, NULL, NULL, NULL
      );
      $wordsApi->getTableOnline($request);
    }

    public function testExampleGetTableProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTablePropertiesRequest(
          "Sample.docx", 1, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTableProperties($request);
    }

    public function testExampleGetTablePropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTablePropertiesOnlineRequest(
          $requestDocument, 1, NULL, NULL, NULL
      );
      $wordsApi->getTablePropertiesOnline($request);
    }

    public function testExampleGetTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTableRowRequest(
          "Sample.docx", "tables/1", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTableRow($request);
    }

    public function testExampleGetTableRowFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTableRowFormatRequest(
          "Sample.docx", "sections/0/tables/2", 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTableRowFormat($request);
    }

    public function testExampleGetTableRowFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTableRowFormatOnlineRequest(
          $requestDocument, "sections/0/tables/2", 0, NULL, NULL
      );
      $wordsApi->getTableRowFormatOnline($request);
    }

    public function testExampleGetTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTableRowOnlineRequest(
          $requestDocument, "tables/1", 0, NULL, NULL
      );
      $wordsApi->getTableRowOnline($request);
    }

    public function testExampleGetTables()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $request = new GetTablesRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->getTables($request);
    }

    public function testExampleGetTablesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $request = new GetTablesOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->getTablesOnline($request);
    }

    public function testExampleInsertComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCommentRangeStartNode = new NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeStart = new DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeEnd = new DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new CommentInsert(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $insertRequest = new InsertCommentRequest(
          "Sample.docx", $requestComment, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertComment($insertRequest);
    }

    public function testExampleInsertCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestCommentRangeStartNode = new NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeStart = new DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeEnd = new DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new CommentInsert(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $insertRequest = new InsertCommentOnlineRequest(
          $requestDocument, $requestComment, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertCommentOnline($insertRequest);
    }

    public function testExampleInsertCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCustomXmlPart = new CustomXmlPartInsert(array(
          "id" => "hello",
          "data" => "<data>Hello world</data>",
      ));
      $insertRequest = new InsertCustomXmlPartRequest(
          "Sample.docx", $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertCustomXmlPart($insertRequest);
    }

    public function testExampleInsertCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestCustomXmlPart = new CustomXmlPartInsert(array(
          "id" => "hello",
          "data" => "<data>Hello world</data>",
      ));
      $insertRequest = new InsertCustomXmlPartOnlineRequest(
          $requestDocument, $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertCustomXmlPartOnline($insertRequest);
    }

    public function testExampleInsertDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDrawingObject = new DrawingObjectInsert(array(
          "height" => 0,
          "left" => 0,
          "top" => 0,
          "width" => 0,
          "relative_horizontal_position" => "Margin",
          "relative_vertical_position" => "Margin",
          "wrap_type" => "Inline",
      ));
      $requestImageFile = $documentsDir . "Common/aspose-cloud.png";
      $insertRequest = new InsertDrawingObjectRequest(
          "Sample.docx", $requestDrawingObject, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertDrawingObject($insertRequest);
    }

    public function testExampleInsertDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestDrawingObject = new DrawingObjectInsert(array(
          "height" => 0,
          "left" => 0,
          "top" => 0,
          "width" => 0,
          "relative_horizontal_position" => "Margin",
          "relative_vertical_position" => "Margin",
          "wrap_type" => "Inline",
      ));
      $requestImageFile = $documentsDir . "Common/aspose-cloud.png";
      $insertRequest = new InsertDrawingObjectOnlineRequest(
          $requestDocument, $requestDrawingObject, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertDrawingObjectOnline($insertRequest);
    }

    public function testExampleInsertField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestField = new FieldInsert(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $insertRequest = new InsertFieldRequest(
          "Sample.docx", $requestField, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertField($insertRequest);
    }

    public function testExampleInsertFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestField = new FieldInsert(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $insertRequest = new InsertFieldOnlineRequest(
          $requestDocument, $requestField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertFieldOnline($insertRequest);
    }

    public function testExampleInsertFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFootnoteDto = new FootnoteInsert(array(
          "footnote_type" => "Endnote",
          "text" => "test endnote",
      ));
      $insertRequest = new InsertFootnoteRequest(
          "Sample.docx", $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertFootnote($insertRequest);
    }

    public function testExampleInsertFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestFootnoteDto = new FootnoteInsert(array(
          "footnote_type" => "Endnote",
          "text" => "test endnote",
      ));
      $insertRequest = new InsertFootnoteOnlineRequest(
          $requestDocument, $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertFootnoteOnline($insertRequest);
    }

    public function testExampleInsertFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFormField = new FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "123",
          "text_input_format" => "UPPERCASE",
      ));
      $insertRequest = new InsertFormFieldRequest(
          "Sample.docx", $requestFormField, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertFormField($insertRequest);
    }

    public function testExampleInsertFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestFormField = new FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "123",
          "text_input_format" => "UPPERCASE",
      ));
      $insertRequest = new InsertFormFieldOnlineRequest(
          $requestDocument, $requestFormField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertFormFieldOnline($insertRequest);
    }

    public function testExampleInsertHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $insertRequest = new InsertHeaderFooterRequest(
          "Sample.docx", "", "FooterEven", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertHeaderFooter($insertRequest);
    }

    public function testExampleInsertHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $insertRequest = new InsertHeaderFooterOnlineRequest(
          $requestDocument, "", "FooterEven", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertHeaderFooterOnline($insertRequest);
    }

    public function testExampleInsertList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestListInsert = new ListInsert(array(
          "template" => "OutlineLegal",
      ));
      $insertRequest = new InsertListRequest(
          "TestGetLists.doc", $requestListInsert, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertList($insertRequest);
    }

    public function testExampleInsertListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestListInsert = new ListInsert(array(
          "template" => "OutlineLegal",
      ));
      $insertRequest = new InsertListOnlineRequest(
          $requestDocument, $requestListInsert, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertListOnline($insertRequest);
    }

    public function testExampleInsertOrUpdateParagraphTabStop()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestTabStopInsertDto = new TabStopInsert(array(
          "alignment" => "Left",
          "leader" => "None",
          "position" => 100.0,
      ));
      $insertRequest = new InsertOrUpdateParagraphTabStopRequest(
          "Sample.docx", 0, $requestTabStopInsertDto, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertOrUpdateParagraphTabStop($insertRequest);
    }

    public function testExampleInsertOrUpdateParagraphTabStopOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestTabStopInsertDto = new TabStopInsert(array(
          "alignment" => "Left",
          "leader" => "None",
          "position" => 72,
      ));
      $insertRequest = new InsertOrUpdateParagraphTabStopOnlineRequest(
          $requestDocument, $requestTabStopInsertDto, 0, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertOrUpdateParagraphTabStopOnline($insertRequest);
    }

    public function testExampleInsertPageNumbers()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestPageNumber = new PageNumber(array(
          "alignment" => "center",
          "format" => "{PAGE} of {NUMPAGES}",
      ));
      $insertRequest = new InsertPageNumbersRequest(
          "Sample.docx", $requestPageNumber, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertPageNumbers($insertRequest);
    }

    public function testExampleInsertPageNumbersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Common/Sample.docx";
      $requestPageNumber = new PageNumber(array(
          "alignment" => "center",
          "format" => "{PAGE} of {NUMPAGES}",
      ));
      $insertRequest = new InsertPageNumbersOnlineRequest(
          $requestDocument, $requestPageNumber, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertPageNumbersOnline($insertRequest);
    }

    public function testExampleInsertParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestParagraph = new ParagraphInsert(array(
          "text" => "This is a new paragraph for your document",
      ));
      $insertRequest = new InsertParagraphRequest(
          "Sample.docx", $requestParagraph, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertParagraph($insertRequest);
    }

    public function testExampleInsertParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestParagraph = new ParagraphInsert(array(
          "text" => "This is a new paragraph for your document",
      ));
      $insertRequest = new InsertParagraphOnlineRequest(
          $requestDocument, $requestParagraph, "sections/0", NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertParagraphOnline($insertRequest);
    }

    public function testExampleInsertRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestRun = new RunInsert(array(
          "text" => "run with text",
      ));
      $insertRequest = new InsertRunRequest(
          "Sample.docx", "paragraphs/1", $requestRun, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertRun($insertRequest);
    }

    public function testExampleInsertRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestRun = new RunInsert(array(
          "text" => "run with text",
      ));
      $insertRequest = new InsertRunOnlineRequest(
          $requestDocument, "paragraphs/1", $requestRun, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertRunOnline($insertRequest);
    }

    public function testExampleInsertStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestStyleInsert = new StyleInsert(array(
          "style_name" => "My Style",
          "style_type" => "Paragraph",
      ));
      $insertRequest = new InsertStyleRequest(
          "Sample.docx", $requestStyleInsert, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertStyle($insertRequest);
    }

    public function testExampleInsertStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestStyleInsert = new StyleInsert(array(
          "style_name" => "My Style",
          "style_type" => "Paragraph",
      ));
      $insertRequest = new InsertStyleOnlineRequest(
          $requestDocument, $requestStyleInsert, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertStyleOnline($insertRequest);
    }

    public function testExampleInsertTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestTable = new TableInsert(array(
          "columns_count" => 5,
          "rows_count" => 4,
      ));
      $insertRequest = new InsertTableRequest(
          "Sample.docx", $requestTable, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTable($insertRequest);
    }

    public function testExampleInsertTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCell = new TableCellInsert(array(
      ));
      $insertRequest = new InsertTableCellRequest(
          "Sample.docx", "sections/0/tables/2/rows/0", $requestCell, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTableCell($insertRequest);
    }

    public function testExampleInsertTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestCell = new TableCellInsert(array(
      ));
      $insertRequest = new InsertTableCellOnlineRequest(
          $requestDocument, "sections/0/tables/2/rows/0", $requestCell, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTableCellOnline($insertRequest);
    }

    public function testExampleInsertTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestTable = new TableInsert(array(
          "columns_count" => 5,
          "rows_count" => 4,
      ));
      $insertRequest = new InsertTableOnlineRequest(
          $requestDocument, $requestTable, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTableOnline($insertRequest);
    }

    public function testExampleInsertTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestRow = new TableRowInsert(array(
          "columns_count" => 5,
      ));
      $insertRequest = new InsertTableRowRequest(
          "Sample.docx", "sections/0/tables/2", $requestRow, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTableRow($insertRequest);
    }

    public function testExampleInsertTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestRow = new TableRowInsert(array(
          "columns_count" => 5,
      ));
      $insertRequest = new InsertTableRowOnlineRequest(
          $requestDocument, "sections/0/tables/2", $requestRow, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertTableRowOnline($insertRequest);
    }

    public function testExampleInsertWatermarkImage()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $insertRequest = new InsertWatermarkImageRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, "Sample.png"
      );
      $wordsApi->insertWatermarkImage($insertRequest);
    }

    public function testExampleInsertWatermarkImageOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestImageFile = $documentsDir . "Common/aspose-cloud.png";
      $insertRequest = new InsertWatermarkImageOnlineRequest(
          $requestDocument, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertWatermarkImageOnline($insertRequest);
    }

    public function testExampleInsertWatermarkText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestWatermarkText = new WatermarkText(array(
          "text" => "This is the text",
          "rotation_angle" => 90.0,
      ));
      $insertRequest = new InsertWatermarkTextRequest(
          "Sample.docx", $requestWatermarkText, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertWatermarkText($insertRequest);
    }

    public function testExampleInsertWatermarkTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestWatermarkText = new WatermarkText(array(
          "text" => "This is the text",
          "rotation_angle" => 90,
      ));
      $insertRequest = new InsertWatermarkTextOnlineRequest(
          $requestDocument, $requestWatermarkText, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->insertWatermarkTextOnline($insertRequest);
    }

    public function testExampleLoadWebDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestDataSaveOptions = new SaveOptionsData(array(
          "file_name" => "google.doc",
          "save_format" => "doc",
          "dml_effects_rendering_mode" => "1",
          "dml_rendering_mode" => "1",
          "update_sdt_content" => false,
          "zip_output" => false,
      ));
      $requestData = new LoadWebDocumentData(array(
          "loading_document_url" => "http://google.com",
          "save_options" => $requestDataSaveOptions,
      ));
      $loadRequest = new LoadWebDocumentRequest(
          $requestData, NULL
      );
      $wordsApi->loadWebDocument($loadRequest);
    }

    public function testExampleMoveFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $moveRequest = new MoveFileRequest(
          "/TestMoveFileDest_Sample.docx", "Sample.docx", NULL, NULL, NULL
      );
      $wordsApi->moveFile($moveRequest);
    }

    public function testExampleMoveFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $moveRequest = new MoveFolderRequest(
          "/TestMoveFolderDest_Sample", "/TestMoveFolderSrc", NULL, NULL
      );
      $wordsApi->moveFolder($moveRequest);
    }

    public function testExampleOptimizeDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestOptions = new OptimizationOptions(array(
          "ms_word_version" => "Word2002",
      ));
      $optimizeRequest = new OptimizeDocumentRequest(
          "Sample.docx", $requestOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->optimizeDocument($optimizeRequest);
    }

    public function testExampleOptimizeDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestOptions = new OptimizationOptions(array(
          "ms_word_version" => "Word2002",
      ));
      $optimizeRequest = new OptimizeDocumentOnlineRequest(
          $requestDocument, $requestOptions, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->optimizeDocumentOnline($optimizeRequest);
    }

    public function testExampleProtectDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestProtectionRequest = new ProtectionRequest(array(
          "password" => "123",
          "protection_type" => "ReadOnly",
      ));
      $protectRequest = new ProtectDocumentRequest(
          "Sample.docx", $requestProtectionRequest, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->protectDocument($protectRequest);
    }

    public function testExampleProtectDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestProtectionRequest = new ProtectionRequest(array(
          "new_password" => "123",
      ));
      $protectRequest = new ProtectDocumentOnlineRequest(
          $requestDocument, $requestProtectionRequest, NULL, NULL, NULL
      );
      $wordsApi->protectDocumentOnline($protectRequest);
    }

    public function testExampleRejectAllRevisions()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $rejectRequest = new RejectAllRevisionsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->rejectAllRevisions($rejectRequest);
    }

    public function testExampleRejectAllRevisionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $rejectRequest = new RejectAllRevisionsOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->rejectAllRevisionsOnline($rejectRequest);
    }

    public function testExampleRemoveRange()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $removeRequest = new RemoveRangeRequest(
          "Sample.docx", "id0.0.0", "id0.0.1", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->removeRange($removeRequest);
    }

    public function testExampleRemoveRangeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $removeRequest = new RemoveRangeOnlineRequest(
          $requestDocument, "id0.0.0", "id0.0.1", NULL, NULL, NULL
      );
      $wordsApi->removeRangeOnline($removeRequest);
    }

    public function testExampleRenderDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $renderRequest = new RenderDrawingObjectRequest(
          "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderDrawingObject($renderRequest);
    }

    public function testExampleRenderDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $renderRequest = new RenderDrawingObjectOnlineRequest(
          $requestDocument, "png", 0, "sections/0", NULL, NULL, NULL, NULL
      );
      $wordsApi->renderDrawingObjectOnline($renderRequest);
    }

    public function testExampleRenderMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $renderRequest = new RenderMathObjectRequest(
          "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderMathObject($renderRequest);
    }

    public function testExampleRenderMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $renderRequest = new RenderMathObjectOnlineRequest(
          $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderMathObjectOnline($renderRequest);
    }

    public function testExampleRenderPage()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $renderRequest = new RenderPageRequest(
          "Sample.docx", 1, "bmp", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderPage($renderRequest);
    }

    public function testExampleRenderPageOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $renderRequest = new RenderPageOnlineRequest(
          $requestDocument, 1, "bmp", NULL, NULL, NULL
      );
      $wordsApi->renderPageOnline($renderRequest);
    }

    public function testExampleRenderParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $renderRequest = new RenderParagraphRequest(
          "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderParagraph($renderRequest);
    }

    public function testExampleRenderParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $renderRequest = new RenderParagraphOnlineRequest(
          $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderParagraphOnline($renderRequest);
    }

    public function testExampleRenderTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $renderRequest = new RenderTableRequest(
          "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderTable($renderRequest);
    }

    public function testExampleRenderTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $renderRequest = new RenderTableOnlineRequest(
          $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->renderTableOnline($renderRequest);
    }

    public function testExampleReplaceText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestReplaceText = new ReplaceTextParameters(array(
          "old_value" => "Testing",
          "new_value" => "Aspose testing",
      ));
      $replaceRequest = new ReplaceTextRequest(
          "Sample.docx", $requestReplaceText, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->replaceText($replaceRequest);
    }

    public function testExampleReplaceTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestReplaceText = new ReplaceTextParameters(array(
          "old_value" => "aspose",
          "new_value" => "aspose new",
      ));
      $replaceRequest = new ReplaceTextOnlineRequest(
          $requestDocument, $requestReplaceText, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->replaceTextOnline($replaceRequest);
    }

    public function testExampleReplaceWithText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestRangeText = new ReplaceRange(array(
          "text" => "Replaced header",
      ));
      $replaceRequest = new ReplaceWithTextRequest(
          "Sample.docx", "id0.0.0", $requestRangeText, "id0.0.1", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->replaceWithText($replaceRequest);
    }

    public function testExampleReplaceWithTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestRangeText = new ReplaceRange(array(
          "text" => "Replaced header",
      ));
      $replaceRequest = new ReplaceWithTextOnlineRequest(
          $requestDocument, "id0.0.0", $requestRangeText, "id0.0.1", NULL, NULL, NULL
      );
      $wordsApi->replaceWithTextOnline($replaceRequest);
    }

    public function testExampleResetCache()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $resetRequest = new ResetCacheRequest(
      );
      $wordsApi->resetCache($resetRequest);
    }

    public function testExampleSaveAs()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestSaveOptionsData = new SaveOptionsData(array(
          "save_format" => "docx",
          "file_name" => "/TestSaveAsFromPdfToDoc.docx",
      ));
      $saveRequest = new SaveAsRequest(
          "Sample.docx", $requestSaveOptionsData, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->saveAs($saveRequest);
    }

    public function testExampleSaveAsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Common/test_multi_pages.docx";
      $requestSaveOptionsData = new SaveOptionsData(array(
          "save_format" => "pdf",
          "file_name" => "/TestSaveAs.pdf",
      ));
      $saveRequest = new SaveAsOnlineRequest(
          $requestDocument, $requestSaveOptionsData, NULL, NULL, NULL
      );
      $wordsApi->saveAsOnline($saveRequest);
    }

    public function testExampleSaveAsRange()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestDocumentParameters = new RangeDocument(array(
          "document_name" => "/NewDoc.docx",
      ));
      $saveRequest = new SaveAsRangeRequest(
          "Sample.docx", "id0.0.0", $requestDocumentParameters, "id0.0.1", NULL, NULL, NULL, NULL
      );
      $wordsApi->saveAsRange($saveRequest);
    }

    public function testExampleSaveAsRangeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestDocumentParameters = new RangeDocument(array(
          "document_name" => "/NewDoc.docx",
      ));
      $saveRequest = new SaveAsRangeOnlineRequest(
          $requestDocument, "id0.0.0", $requestDocumentParameters, "id0.0.1", NULL, NULL
      );
      $wordsApi->saveAsRangeOnline($saveRequest);
    }

    public function testExampleSaveAsTiff()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestSaveOptions = new TiffSaveOptionsData(array(
          "save_format" => "tiff",
          "file_name" => "/abc.tiff",
      ));
      $saveRequest = new SaveAsTiffRequest(
          "Sample.docx", $requestSaveOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->saveAsTiff($saveRequest);
    }

    public function testExampleSaveAsTiffOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Common/test_multi_pages.docx";
      $requestSaveOptions = new TiffSaveOptionsData(array(
          "save_format" => "tiff",
          "file_name" => "/abc.tiff",
      ));
      $saveRequest = new SaveAsTiffOnlineRequest(
          $requestDocument, $requestSaveOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->saveAsTiffOnline($saveRequest);
    }

    public function testExampleSearch()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $searchRequest = new SearchRequest(
          "Sample.docx", "aspose", NULL, NULL, NULL, NULL
      );
      $wordsApi->search($searchRequest);
    }

    public function testExampleSearchOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $searchRequest = new SearchOnlineRequest(
          $requestDocument, "aspose", NULL, NULL
      );
      $wordsApi->searchOnline($searchRequest);
    }

    public function testExampleSplitDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $splitRequest = new SplitDocumentRequest(
          "Sample.docx", "text", NULL, NULL, NULL, NULL, "/TestSplitDocument.text", 1, 2, NULL, NULL
      );
      $wordsApi->splitDocument($splitRequest);
    }

    public function testExampleSplitDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $splitRequest = new SplitDocumentOnlineRequest(
          $requestDocument, "text", NULL, NULL, "/TestSplitDocument.text", 1, 2, NULL, NULL
      );
      $wordsApi->splitDocumentOnline($splitRequest);
    }

    public function testExampleUnprotectDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestProtectionRequest = new ProtectionRequest(array(
          "password" => "aspose",
      ));
      $unprotectRequest = new UnprotectDocumentRequest(
          "Sample.docx", $requestProtectionRequest, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->unprotectDocument($unprotectRequest);
    }

    public function testExampleUnprotectDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestProtectionRequest = new ProtectionRequest(array(
          "password" => "aspose",
      ));
      $unprotectRequest = new UnprotectDocumentOnlineRequest(
          $requestDocument, $requestProtectionRequest, NULL, NULL, NULL
      );
      $wordsApi->unprotectDocumentOnline($unprotectRequest);
    }

    public function testExampleUpdateBookmark()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $bookmarkName = "aspose";

      $requestBookmarkData = new BookmarkData(array(
          "name" => $bookmarkName,
          "text" => "This will be the text for Aspose",
      ));
      $updateRequest = new UpdateBookmarkRequest(
          "Sample.docx", $bookmarkName, $requestBookmarkData, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateBookmark($updateRequest);
    }

    public function testExampleUpdateBookmarkOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $bookmarkName = "aspose";

      $requestDocument = $documentsDir . "Sample.docx";
      $requestBookmarkData = new BookmarkData(array(
          "name" => $bookmarkName,
          "text" => "This will be the text for Aspose",
      ));
      $updateRequest = new UpdateBookmarkOnlineRequest(
          $requestDocument, $bookmarkName, $requestBookmarkData, NULL, NULL, "Sample.docx", NULL, NULL
      );
      $wordsApi->updateBookmarkOnline($updateRequest);
    }

    public function testExampleUpdateBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestBorderPropertiesColor = new XmlColor(array(
          "web" => "#AABBCC",
      ));
      $requestBorderProperties = new Border(array(
          "border_type" => "Left",
          "color" => $requestBorderPropertiesColor,
          "distance_from_text" => 6.0,
          "line_style" => "DashDotStroker",
          "line_width" => 2.0,
          "shadow" => true,
      ));
      $updateRequest = new UpdateBorderRequest(
          "Sample.docx", "left", $requestBorderProperties, "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateBorder($updateRequest);
    }

    public function testExampleUpdateBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestBorderPropertiesColor = new XmlColor(array(
          "web" => "#AABBCC",
      ));
      $requestBorderProperties = new Border(array(
          "border_type" => "Left",
          "color" => $requestBorderPropertiesColor,
          "distance_from_text" => 6,
          "line_style" => "DashDotStroker",
          "line_width" => 2,
          "shadow" => true,
      ));
      $updateRequest = new UpdateBorderOnlineRequest(
          $requestDocument, $requestBorderProperties, "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateBorderOnline($updateRequest);
    }

    public function testExampleUpdateComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCommentRangeStartNode = new NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeStart = new DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeEnd = new DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new CommentUpdate(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $updateRequest = new UpdateCommentRequest(
          "Sample.docx", 0, $requestComment, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateComment($updateRequest);
    }

    public function testExampleUpdateCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestCommentRangeStartNode = new NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeStart = new DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeEnd = new DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new CommentUpdate(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $updateRequest = new UpdateCommentOnlineRequest(
          $requestDocument, 0, $requestComment, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateCommentOnline($updateRequest);
    }

    public function testExampleUpdateCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestCustomXmlPart = new CustomXmlPartUpdate(array(
          "data" => "<data>Hello world</data>",
      ));
      $updateRequest = new UpdateCustomXmlPartRequest(
          "Sample.docx", 0, $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateCustomXmlPart($updateRequest);
    }

    public function testExampleUpdateCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestCustomXmlPart = new CustomXmlPartUpdate(array(
          "data" => "<data>Hello world</data>",
      ));
      $updateRequest = new UpdateCustomXmlPartOnlineRequest(
          $requestDocument, 0, $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateCustomXmlPartOnline($updateRequest);
    }

    public function testExampleUpdateDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDrawingObject = new DrawingObjectUpdate(array(
          "left" => 0,
      ));
      $requestImageFile = $documentsDir . "Common/aspose-cloud.png";
      $updateRequest = new UpdateDrawingObjectRequest(
          "Sample.docx", $requestDrawingObject, $requestImageFile, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateDrawingObject($updateRequest);
    }

    public function testExampleUpdateDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestDrawingObject = new DrawingObjectUpdate(array(
          "left" => 0,
      ));
      $requestImageFile = $documentsDir . "Common/aspose-cloud.png";
      $updateRequest = new UpdateDrawingObjectOnlineRequest(
          $requestDocument, $requestDrawingObject, $requestImageFile, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateDrawingObjectOnline($updateRequest);
    }

    public function testExampleUpdateField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestField = new FieldUpdate(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $updateRequest = new UpdateFieldRequest(
          "Sample.docx", 0, $requestField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateField($updateRequest);
    }

    public function testExampleUpdateFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestField = new FieldUpdate(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $updateRequest = new UpdateFieldOnlineRequest(
          $requestDocument, $requestField, 0, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFieldOnline($updateRequest);
    }

    public function testExampleUpdateFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $updateRequest = new UpdateFieldsRequest(
          "Sample.docx", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFields($updateRequest);
    }

    public function testExampleUpdateFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $updateRequest = new UpdateFieldsOnlineRequest(
          $requestDocument, NULL, NULL, NULL
      );
      $wordsApi->updateFieldsOnline($updateRequest);
    }

    public function testExampleUpdateFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFootnoteDto = new FootnoteUpdate(array(
          "text" => "new text is here",
      ));
      $updateRequest = new UpdateFootnoteRequest(
          "Sample.docx", 0, $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFootnote($updateRequest);
    }

    public function testExampleUpdateFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestFootnoteDto = new FootnoteUpdate(array(
          "text" => "new text is here",
      ));
      $updateRequest = new UpdateFootnoteOnlineRequest(
          $requestDocument, $requestFootnoteDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFootnoteOnline($updateRequest);
    }

    public function testExampleUpdateFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFormField = new FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "No name",
      ));
      $updateRequest = new UpdateFormFieldRequest(
          "Sample.docx", 0, $requestFormField, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFormField($updateRequest);
    }

    public function testExampleUpdateFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestFormField = new FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "No name",
      ));
      $updateRequest = new UpdateFormFieldOnlineRequest(
          $requestDocument, $requestFormField, 0, "sections/0", NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateFormFieldOnline($updateRequest);
    }

    public function testExampleUpdateList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestListUpdate = new ListUpdate(array(
          "is_restart_at_each_section" => true,
      ));
      $updateRequest = new UpdateListRequest(
          "TestGetLists.doc", 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateList($updateRequest);
    }

    public function testExampleUpdateListLevel()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestListUpdate = new ListLevelUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new UpdateListLevelRequest(
          "TestGetLists.doc", 1, 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateListLevel($updateRequest);
    }

    public function testExampleUpdateListLevelOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestListUpdate = new ListLevelUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new UpdateListLevelOnlineRequest(
          $requestDocument, 1, $requestListUpdate, 1, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateListLevelOnline($updateRequest);
    }

    public function testExampleUpdateListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestListUpdate = new ListUpdate(array(
          "is_restart_at_each_section" => true,
      ));
      $updateRequest = new UpdateListOnlineRequest(
          $requestDocument, 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateListOnline($updateRequest);
    }

    public function testExampleUpdateParagraphFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestParagraphFormatDto = new ParagraphFormatUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new UpdateParagraphFormatRequest(
          "Sample.docx", 0, $requestParagraphFormatDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateParagraphFormat($updateRequest);
    }

    public function testExampleUpdateParagraphFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestParagraphFormatDto = new ParagraphFormatUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new UpdateParagraphFormatOnlineRequest(
          $requestDocument, $requestParagraphFormatDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateParagraphFormatOnline($updateRequest);
    }

    public function testExampleUpdateParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestListFormatDto = new ListFormatUpdate(array(
          "list_id" => 2,
      ));
      $updateRequest = new UpdateParagraphListFormatRequest(
          "Sample.docx", 0, $requestListFormatDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateParagraphListFormat($updateRequest);
    }

    public function testExampleUpdateParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestListFormatDto = new ListFormatUpdate(array(
          "list_id" => 2,
      ));
      $updateRequest = new UpdateParagraphListFormatOnlineRequest(
          $requestDocument, $requestListFormatDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateParagraphListFormatOnline($updateRequest);
    }

    public function testExampleUpdateRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestRun = new RunUpdate(array(
          "text" => "run with text",
      ));
      $updateRequest = new UpdateRunRequest(
          "Sample.docx", "paragraphs/1", 0, $requestRun, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateRun($updateRequest);
    }

    public function testExampleUpdateRunFont()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFontDto = new Font(array(
          "bold" => true,
      ));
      $updateRequest = new UpdateRunFontRequest(
          "Sample.docx", "paragraphs/0", 0, $requestFontDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateRunFont($updateRequest);
    }

    public function testExampleUpdateRunFontOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestFontDto = new Font(array(
          "bold" => true,
      ));
      $updateRequest = new UpdateRunFontOnlineRequest(
          $requestDocument, "paragraphs/0", $requestFontDto, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateRunFontOnline($updateRequest);
    }

    public function testExampleUpdateRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.doc";
      $requestRun = new RunUpdate(array(
          "text" => "run with text",
      ));
      $updateRequest = new UpdateRunOnlineRequest(
          $requestDocument, "paragraphs/1", $requestRun, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateRunOnline($updateRequest);
    }

    public function testExampleUpdateSectionPageSetup()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestPageSetup = new PageSetup(array(
          "rtl_gutter" => true,
          "left_margin" => 10.0,
          "orientation" => "Landscape",
          "paper_size" => "A5",
      ));
      $updateRequest = new UpdateSectionPageSetupRequest(
          "Sample.docx", 0, $requestPageSetup, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateSectionPageSetup($updateRequest);
    }

    public function testExampleUpdateSectionPageSetupOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestPageSetup = new PageSetup(array(
          "rtl_gutter" => true,
          "left_margin" => 10,
          "orientation" => "Landscape",
          "paper_size" => "A5",
      ));
      $updateRequest = new UpdateSectionPageSetupOnlineRequest(
          $requestDocument, 0, $requestPageSetup, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateSectionPageSetupOnline($updateRequest);
    }

    public function testExampleUpdateStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestStyleUpdate = new StyleUpdate(array(
          "name" => "My Style",
      ));
      $updateRequest = new UpdateStyleRequest(
          "Sample.docx", "Heading 1", $requestStyleUpdate, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateStyle($updateRequest);
    }

    public function testExampleUpdateStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestStyleUpdate = new StyleUpdate(array(
          "name" => "My Style",
      ));
      $updateRequest = new UpdateStyleOnlineRequest(
          $requestDocument, "Heading 1", $requestStyleUpdate, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateStyleOnline($updateRequest);
    }

    public function testExampleUpdateTableCellFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFormat = new TableCellFormat(array(
          "bottom_padding" => 5.0,
          "fit_text" => true,
          "horizontal_merge" => "First",
          "wrap_text" => true,
      ));
      $updateRequest = new UpdateTableCellFormatRequest(
          "Sample.docx", "sections/0/tables/2/rows/0", 0, $requestFormat, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTableCellFormat($updateRequest);
    }

    public function testExampleUpdateTableCellFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestFormat = new TableCellFormat(array(
          "bottom_padding" => 5,
          "fit_text" => true,
          "horizontal_merge" => "First",
          "wrap_text" => true,
      ));
      $updateRequest = new UpdateTableCellFormatOnlineRequest(
          $requestDocument, "sections/0/tables/2/rows/0", $requestFormat, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTableCellFormatOnline($updateRequest);
    }

    public function testExampleUpdateTableProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestProperties = new TableProperties(array(
          "alignment" => "Right",
          "allow_auto_fit" => false,
          "bidi" => true,
          "bottom_padding" => 1.0,
          "cell_spacing" => 2.0,
          "style_options" => "ColumnBands",
      ));
      $updateRequest = new UpdateTablePropertiesRequest(
          "Sample.docx", 1, $requestProperties, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTableProperties($updateRequest);
    }

    public function testExampleUpdateTablePropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestProperties = new TableProperties(array(
          "alignment" => "Right",
          "allow_auto_fit" => false,
          "bidi" => true,
          "bottom_padding" => 1,
          "cell_spacing" => 2,
          "style_options" => "ColumnBands",
      ));
      $updateRequest = new UpdateTablePropertiesOnlineRequest(
          $requestDocument, $requestProperties, 1, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTablePropertiesOnline($updateRequest);
    }

    public function testExampleUpdateTableRowFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $requestFormat = new TableRowFormat(array(
          "allow_break_across_pages" => true,
          "heading_format" => true,
          "height" => 10.0,
          "height_rule" => "Exactly",
      ));
      $updateRequest = new UpdateTableRowFormatRequest(
          "Sample.docx", "sections/0/tables/2", 0, $requestFormat, NULL, NULL, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTableRowFormat($updateRequest);
    }

    public function testExampleUpdateTableRowFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestDocument = $documentsDir . "Sample.docx";
      $requestFormat = new TableRowFormat(array(
          "allow_break_across_pages" => true,
          "heading_format" => true,
          "height" => 10,
          "height_rule" => "Auto",
      ));
      $updateRequest = new UpdateTableRowFormatOnlineRequest(
          $requestDocument, "sections/0/tables/2", $requestFormat, 0, NULL, NULL, NULL, NULL, NULL
      );
      $wordsApi->updateTableRowFormatOnline($updateRequest);
    }

    public function testExampleUploadFile()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $requestFileContent = $documentsDir . "Sample.docx";
      $uploadRequest = new UploadFileRequest(
          $requestFileContent, "Sample.docx", NULL
      );
      $wordsApi->uploadFile($uploadRequest);
    }
}