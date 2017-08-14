<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
    use Plenty\Plugin\Templates\Twig;

    class SingleItemLiveAuctionContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.SingleItemLiveAuction');
        }
    }
