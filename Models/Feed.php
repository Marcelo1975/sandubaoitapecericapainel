<?php
namespace Models;
//modelo para classe que alimenta o site
use \Core\Model;

class Feed extends Model {
    //troca a imagem de cabeçalho do site
    public function imageSlideSave() {
    	if(isset($_POST['sliderTitle']) && !empty($_POST['sliderTitle'])) {
            $sliderTitle = addslashes($_POST['sliderTitle']);
            $sliderDescription = addslashes($_POST['sliderDescription']);

            if(isset($_FILES['slider']) && !empty($_FILES['slider']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['slider']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['slider']['tmp_name'], '../sandubao/assets/images/media/slide/'.$nameImage);

			    	$sql = "INSERT INTO slider (title, description, url) VALUES (:title, :description, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":title", $sliderTitle);
			    	$sql->bindValue(":description", $sliderDescription);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }
    //troca as imagens de apresentação(marketing) do site
    public function news() {
    	if(isset($_FILES['marketing']) && !empty($_FILES['marketing']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['marketing']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['marketing']['tmp_name'], '../sandubao/assets/images/media/marketing/'.$nameImage);

                    if(isset($_POST['title']) && !empty($_POST['title'])) {
		            $title = addslashes($_POST['title']);
		            $description = addslashes($_POST['description']);

			    	$sql = "INSERT INTO news (title, description, url) VALUES (:title, :description, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":title", $title);
			    	$sql->bindValue(":description", $description);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }
    //troca as imagend em destaques do site
    public function featureeds() {
    	if(isset($_FILES['featurette']) && !empty($_FILES['featurette']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['featurette']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['featurette']['tmp_name'], '../sandubao/assets/images/media/featurettes/'.$nameImage);

                    if(isset($_POST['featurettetitle']) && !empty($_POST['featurettetitle'])) {
		            $featurettetitle = addslashes($_POST['featurettetitle']);
		            $featurettedescription = addslashes($_POST['featurettedescription']);

			    	$sql = "INSERT INTO featurettes (featurettetitle, featurettedescription, url) VALUES (:featurettetitle, :featurettedescription, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":featurettetitle", $featurettetitle);
			    	$sql->bindValue(":featurettedescription", $featurettedescription);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }
    //alimenta a pagina sobre o site
    public function aboutPage() {
    	if(isset($_FILES['about']) && !empty($_FILES['about']['tmp_name'])) {
                $extensions = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['about']['type'], $extensions)) {

                    $nameImage = md5(time().rand(0, 999)).'.jpg';

                    move_uploaded_file($_FILES['about']['tmp_name'], '../sandubao/assets/images/media/about/'.$nameImage);

                    if(isset($_POST['bodyabout']) && !empty($_POST['bodyabout'])) {
		            $bodyabout = addslashes($_POST['bodyabout']);

			    	$sql = "INSERT INTO aboutpage (bodyabout, url) VALUES (:bodyabout, :url)";
			    	$sql = $this->db->prepare($sql);
			    	$sql->bindValue(":bodyabout", $bodyabout);
			    	$sql->bindValue(":url", $nameImage);
			    	$sql->execute();
                }
            }
        }
    }

}