<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Videos;
use Authorization\IdentityInterface;

/**
 * Videos policy
 */
class VideosPolicy
{
    /**
     * Check if $user can add Videos
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Videos $videos
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Videos $videos)
    {
        return true;
    }

    /**
     * Check if $user can edit Videos
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Videos $videos
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Videos $videos)
    {
        return true;
    }

    /**
     * Check if $user can delete Videos
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Videos $videos
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Videos $videos)
    {
        return true;
    }

    /**
     * Check if $user can view Videos
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Videos $videos
     * @return bool
     */
    public function canView(IdentityInterface $user, Videos $videos)
    {
        return true;
    }
}
