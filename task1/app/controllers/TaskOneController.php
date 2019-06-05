<?php

class TaskOneController extends BaseController {

  private function getPosts() {
    $posts = [
      [
        'title' => 'Article 1',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 2',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 3',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 4',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 5',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 6',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 7',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 8',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 9',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
      [
        'title' => 'Article 10',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
    ];
    return $posts;
  }

  public function showRoot() {
    return Redirect::action('TaskOneController@showHome');
  }

	public function showHome()
	{
    $urls = [
      'Articles' => URL::route('atricles'),
      'About' => URL::route('about'),
      'Contact-us' => URL::route('contact-us')
    ];
		return View::make('home', ['urls' => $urls]);
  }
  
  public function showAtricles() {
    return View::make('atricles', ['posts' => $this->getPosts()]);
  }

  public function showPost($post) {
    forEach($this->getPosts() as $key => $item) {
      if($post == $key) {
        return View::make('post', ['post' => $item]);
      }
    }
    return Redirect::action('TaskOneController@showNotFound');
  }

  public function showNotFound() {
    return View::make('notFound');
  }

  public function showAbout() {
    return View::make('about');
  }

  public function showContactUs($error = null) {
    return View::make('contact-us', ['error' => $error]);
  }

  public function showThankYou() {
    $name = Input::old('name');
    return View::make('thank-you', ['name' => $name]);
  }

  public function submitForm() {
    if(Input::has('name') && Input::has('text')) {
      return Redirect::action('TaskOneController@showThankYou')->withInput();
    } else {
      return $this->showContactUs(true);
    }
  }


}
