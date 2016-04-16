<?php

namespace MajoraVendor\MajoraNamespace\Component\Action\Dal\MajoraEntity;

use MajoraVendor\MajoraNamespace\Component\Event\MajoraEntityEvent;
use MajoraVendor\MajoraNamespace\Component\Event\MajoraEntityEvents;

/**
 * MajoraEntity deletion action representation.
 */
class DeleteAction extends AbstractDalAction
{
    /**
     * @see ActionInterface::resolve()
     */
    public function resolve()
    {
        $this->fireEvent(
            MajoraEntityEvents::MAJORA_VENDOR_MAJORA_ENTITY_DELETED,
            new MajoraEntityEvent($this->majoraEntity, $this)
        );
    }
}
