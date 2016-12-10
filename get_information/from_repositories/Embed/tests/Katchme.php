<?php

class KatchmeTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://ktch.tv/6_Lf',
            [
                'title' => 'Backstage View 👀 of #ChineseNewYear Parade 🤓in Hong Kong #CathayCNYP',
                'description' => 'John Ho',
                'type' => 'link',
                'providerName' => 'Katch',
            ]
        );
    }
}
