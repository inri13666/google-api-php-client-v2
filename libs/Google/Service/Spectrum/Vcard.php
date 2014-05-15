<?php 
namespace Google\Service\Spectrum;
class Vcard extends \Google\Model
{
  protected $adrType = 'Google\Service\Spectrum\VcardAddress';
  protected $adrDataType = '';
  protected $emailType = 'Google\Service\Spectrum\VcardTypedText';
  protected $emailDataType = '';
  public $fn;
  protected $orgType = 'Google\Service\Spectrum\VcardTypedText';
  protected $orgDataType = '';
  protected $telType = 'Google\Service\Spectrum\VcardTelephone';
  protected $telDataType = '';

  public function setAdr(\Google\Service\Spectrum\VcardAddress $adr)
  {
    $this->adr = $adr;
  }

  public function getAdr()
  {
    return $this->adr;
  }

  public function setEmail(\Google\Service\Spectrum\VcardTypedText $email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setFn($fn)
  {
    $this->fn = $fn;
  }

  public function getFn()
  {
    return $this->fn;
  }

  public function setOrg(\Google\Service\Spectrum\VcardTypedText $org)
  {
    $this->org = $org;
  }

  public function getOrg()
  {
    return $this->org;
  }

  public function setTel(\Google\Service\Spectrum\VcardTelephone $tel)
  {
    $this->tel = $tel;
  }

  public function getTel()
  {
    return $this->tel;
  }
}
