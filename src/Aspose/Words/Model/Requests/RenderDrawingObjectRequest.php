<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RenderDrawingObjectRequest.php">
 *   Copyright (c) 2018 Aspose.Words for Cloud
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
namespace Aspose\Words\Model\Requests;

/*
 * Request model for renderDrawingObject operation.
 */
class RenderDrawingObjectRequest
{
    /*
     * Initializes a new instance of the RenderDrawingObjectRequest class.
     *  
     * @param string $format The destination format.
     * @param int $index Object's index
     * @param string $name The file name.
     * @param string $folder Original document folder.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $node_path Path to node, which contains drawing objects.
     * @param string $password Password for opening an encrypted document.
     * @param string $storage File storage, which have to be used.
     */
    public function __construct($format, $index, $name, $folder = null, $fonts_location = null, $load_encoding = null, $node_path = null, $password = null, $storage = null)             
    {
        $this->format = $format;
        $this->index = $index;
        $this->name = $name;
        $this->folder = $folder;
        $this->fonts_location = $fonts_location;
        $this->load_encoding = $load_encoding;
        $this->node_path = $node_path;
        $this->password = $password;
        $this->storage = $storage;
    }

    /*
     * The destination format.
     */
    public $format;
	
    /*
     * Object's index
     */
    public $index;
	
    /*
     * The file name.
     */
    public $name;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
    /*
     * Path to node, which contains drawing objects.
     */
    public $node_path;
	
    /*
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
}
