interface DocumentInterface {
    public function getTitle();
    public function getDescription();
    public function getInfo() : array;
    public function process();
}
class TextDocument implements DocumentInterface {
    private string $title;
    private string $description;
    private string $text;
    public function __construct($title, $description, $text) {
        $this->title = $title;
        $this->description = $description;
        $this->text = $text;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getText() {
        return $this->text;
    }
    public function getInfo() : array {
        return array('title' => $this->getTitle(), 'description' => $this->getDescription(), 'text' => $this->getText());
    }
    public function process() {
        echo 'Text is processed' . '<br>';
    }
    public function getWordCount() {
        return str_word_count($this->getText());
    }
}
class ImageDocument implements DocumentInterface {
    private string $title;
    private string $description;
    private string $dimensions;
    public function __construct($title, $description, $dimensions) {
        $this->title = $title;
        $this->description = $description;
        $this->dimensions = $dimensions;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getInfo() : array {
        return array('title' => $this->getTitle(), 'description' => $this->getDescription(), 'dimensions' => $this->getDimensions());
    }
    public function process() {
        echo 'Image is processed' . '<br>';
    }
    public function getDimensions() {
        return $this->dimensions;
    }
}
class VideoDocument implements DocumentInterface {
    private string $title;
    private string $description;
    private string $duration;
    public function __construct($title, $description, $duration) {
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getInfo() : array {
        return array('title' => $this->getTitle(), 'description' => $this->getDescription(), 'durations' => $this->getDuration());
    }
    public function process() {
        echo 'Video is processed' . '<br>';
    }
    public function getDuration() {
        return $this->duration;
    }
}

$text = new TextDocument("My book", "It`s a book about my life", "One day I went out of the house and met a magical dwarf who gave me five beans...");
$image = new ImageDocument("Nice picture", "A little funny dwarf with a beans", "1920x1080");
$video = new VideoDocument("Epic video", "Active cheerful dwarf runs along the road", "5,8");

$text->process();
echo var_dump($text->getInfo()) . '<br>';
echo 'Words in text ' . $text->getWordCount() . '<br>';
echo '<br>';

$image->process();
echo var_dump($image->getInfo()) . '<br>';
echo 'Image parameters ' . $image->getDimensions() . '<br>';
echo '<br>';

$video->process();
echo var_dump($video->getInfo()) . '<br>';
echo 'Video duration ' . $video->getDuration() . ' min' . '<br>';
echo '<br>';
