
class Wise extends Application {
    function bingo() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        $source = $this->quotes->get(6);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
}
