<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
  protected $guarded = [];

  public function profileImage() {
    return "/storage/".(($this->image) ? $this->image : "profile/V9y43VKHpMPpjG1TBm73kCbCpzUzb3omrKYUFRdo.png");
  }

    public function user() {
      return $this->belongsTo(User::class);
    }
}
