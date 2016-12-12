<!DOCTYPE html>
<html>
<body>

	
	<?php 
		//----------------SINGLE TERN----------------------
		
		class BookSingleton
		{
			private $author = "Gamma, Helm, Johnson, and Vlissides";
			private $title = "Design Patterns";
			
			private static $book = NULL;
			private static $isLoanedOut = FALSE;
			
			private function __construct(){}
			
			static function borrowBook()
			{
				if(FALSE==self::$isLoanedOut)
				{
					//self = this. Self dung voi cac bien static hoac chua duoc khoi tao
					if(NULL == self::$book)
					{
						self::$book = new BookSingleton();
					}
					self::$isLoanedOut= TRUE;
				}
				else
				{
					return NULL;
				}
			}
			
			function returnBook(BookSingleton $bookReturned)
			{
				self::$isLoanedOut=FALSE;
			}
			
			function getAuthor()
			{
				return $this->author;
			}
			
			function getTitlte()
			{
				return $this->title;
			}
			
			function getAuthorandTitle()
			{
				return $this->getTitlte()." By ".$this->getAuthor();
			}
		}
		
		class BookBorrower
		{
			private $borrowedBook;
			private $haveBook = FALSE;
			
			function __construct(){}
			
			function getAuthorandTitle()
			{
				if(TRUE == $this->haveBook)
				{
					return $this->borrowedBook->getAuthorandTitle();
				}
				else
				{
					return "I don't have the book";
				}
			}
			
			function borrowBook()
			{
				$this->borrowedBool = BookSingleton::borrowBook();
				if($this->borrowedBook== NULL)
				{
					$this->haveBook=FALSE;
				}else	
				{
					$this->haveBook=TRUE;
				}
			}
			
			function returnBook()
			{
				$this->borrowedBook->returnBook($this->borrowedBook);
			}
			
		}
		
		echo '</br>';
		echo 'TEST PATTERN';
		
		$Borrower1 = new BookBorrower();
		$Borrower2 = new BookBorrower();
		
		$Borrower1->borrowBook();

		echo '</br>';
		echo "Borrower 1 asked to borrow the book";
		
		echo '</br>';
		echo "Brrower1 Author and Title : ";
		echo $Borrower1->getAuthorandTitle();
		
		
		
	?>
	

</body>
</html>