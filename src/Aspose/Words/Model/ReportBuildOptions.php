<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReportBuildOptions.php">
 *   Copyright (c) 2022 Aspose.Words for Cloud
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

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * ReportBuildOptions
 *
 * @description Specifies options controlling behavior of ReportingEngine while building a report.
 */
class ReportBuildOptions
{
    /*
     * Possible values of this enum
     */
    const NONE = 'None';
    const ALLOW_MISSING_MEMBERS = 'AllowMissingMembers';
    const REMOVE_EMPTY_PARAGRAPHS = 'RemoveEmptyParagraphs';
    const INLINE_ERROR_MESSAGES = 'InlineErrorMessages';
    const USE_LEGACY_HEADER_FOOTER_VISITING = 'UseLegacyHeaderFooterVisiting';

    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ALLOW_MISSING_MEMBERS,
            self::REMOVE_EMPTY_PARAGRAPHS,
            self::INLINE_ERROR_MESSAGES,
            self::USE_LEGACY_HEADER_FOOTER_VISITING
        ];
    }
}
