<?php

class PhackagesHomeController extends PhabricatorController {
    public function handleRequest(AphrontRequest $request) {
        return $this->newPage()
            ->setTitle(pht('Phackages'));
    }
}
