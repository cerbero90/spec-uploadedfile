<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManagerSpec extends ObjectBehavior
{
    function let(UploadedFile $file)
    {
        $file->willBeConstructedWith(array('path', 'originalName'));
    }

    function it_saves_an_uploaded_file(UploadedFile $file)
    {
        $this->saveFile($file);
    }
}
