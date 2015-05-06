<?php namespace HusayMedia\Pulitico\Components;

use Cms\Classes\ComponentBase;

class Politicians extends ComponentBase
{
    /**
    * A collection of politicians to display
    * @var Collection
    */
    public $politicians;

    /**
    * Parameter used to filter politicians to display by location
    * @var string
    */
    public $location;

    /**
    * Parameter used to filter politicians to display by title
    * @var string
    */
    public $title;

    public function componentDetails()
    {
        return [
            'name'        => 'husaymedia.pulitico::lang.settings.pulitico_list_name',
            'description' => 'husaymedia.pulitico::lang.settings.pulitico_list_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'husaymedia.pulitico::lang.settings.pulitico_name',
                'description' => 'rainlab.blog::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'categoryPage' => [
                'title'       => 'rainlab.blog::lang.settings.post_category',
                'description' => 'rainlab.blog::lang.settings.post_category_description',
                'type'        => 'dropdown',
                'default'     => 'blog/category',
            ],
        ];
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->politician = $this->page['post'] = $this->loadPost();


        $this->addCss('assets/js/addTestimonial.js');
    }

    public function onAddTestimonial()
    {
        try {
            if (!$user = Auth::getUser()) {
                throw new ApplicationException('You should be logged in.');
            }

            $member = $this->getMember();
            $topic = $this->getTopic();

            if (!$topic || !$topic->canPost())
                throw new ApplicationException('You cannot edit posts or make replies.');

            $post = PostModel::createInTopic($topic, $member, post());
            $postUrl = $this->currentPageUrl([$this->paramName('slug') => $topic->slug]);

            TopicFollow::sendNotifications($topic, $post, $postUrl);
            Flash::success(post('flash', 'Response added successfully!'));

            /*
             * Extensbility
             */
            Event::fire('rainlab.forum.topic.post', [$this, $post, $postUrl]);
            $this->fireEvent('topic.post', [$post, $postUrl]);

            /*
             * Redirect to the intended page after successful update
             */
            $redirectUrl = post('redirect', $postUrl);

            return Redirect::to($redirectUrl.'?page=last#post-'.$post->id);
        }
        catch (Exception $ex) {
            Flash::error($ex->getMessage());
        }
    }



}
