# Videopreview Image Extractor

Video Preview Image Extension for [ImageExtractor](https://github.com/ivoba/image-extractor)

Gets preview images from embedded videos in a html text.
Supported platforms are:

- Vimeo
- Youtube
- Dailymotion

## Usage

``` php
$extractorList = [new VimeoExtractor()];
$extractor = new ImageExtractor($extractorList, $filter = []);
$images = $extractor->extract(file_get_contents($file));
```

A factory method for the default VideoPreviewImageExtractor is provided:

``` php
    $videoPreviewImageCreator = VideoPreviewImageExtractor::create();
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/ivoba/videopreview-image-extractor/blob/master/CONTRIBUTING.md) for details.


## Credits

- Ivo Bathke(https://github.com/ivoba)


## License

The MIT License (MIT). Please see [License File](https://github.com/ivoba/videopreview-image-extractor/blob/master/LICENSE) for more information.
