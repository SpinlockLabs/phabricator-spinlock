<?php

final class SpinlockSQLPatchList extends PhabricatorSQLPatchList {
    public function getNamespace() {
        return 'spinlock';
    }

    public function getPatches() {
        $patches = array(
            'db.phackages' => array (
                'name' => 'phackages',
                'type' => 'db',
                'after' => array()
            )
        );

        $root = phutil_get_library_root('phabricator-spinlock');
        $auto_root = $root.'/../resources/sql/patches/';
        $auto_patches = $this->buildPatchesFromDirectory($auto_root);
        $patches += $auto_patches;

        return $patches;
    }
}
