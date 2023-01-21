<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    /**
     * @param  string  $email
     * @param  string|null  $list
     * @return mixed
     */
    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        // @phpstan-ignore-next-line
        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }

    /**
     * @return \MailchimpMarketing\ApiClient
     */
    protected function client()
    {
        return (new ApiClient() )->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5',
        ]);
    }
}
