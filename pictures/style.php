<style>
	/* ViewModal의 form-horizontal 기본 여백 제거 */
	.imgViewModal .form-horizontal {
		margin: 0;
	}
	/* 라벨을 블록단위로하고 기본 속성 제거 */
	.imgViewModal .form-horizontal .modal-body .control-label {
		float: none;
		width: auto;
		text-align: left;
	}
	/* input 태그 기본 여백 제거(특히 왼쪽 padding) */
	.imgViewModal .form-horizontal .modal-body .controls {
		padding: 0;
		margin: 0;
	}
	/* input 태그 크기 */
	.imgViewModal .form-horizontal .modal-body .controls input[type="text"],
	.imgViewModal .form-horizontal .modal-body .controls input[type="file"],
	.imgViewModal .form-horizontal .modal-body .controls textarea {
		width: 85%;
	}
	/* Modal Body 왼쪽 기본값 */
	.imgViewModal .modal-body .leftBody {
		padding-right: 15px;
		padding-left: 15px;
		height: 90%;
		vertical-align: top;
		text-align: center;
	}
	/* Modal Body 오른쪽 기본값 */
	.imgViewModal .modal-body .rightBody {
		height: 90%;
		vertical-align: top;
	}
	/* Modal Body 왼쪽의 이미지 기본값 */
	.imgViewModal .modal-body .leftBody img {
		max-height: 90%;
	}
	
/*****************************************************************************************************/
	/* 너비에 따른 반응성 */ 
	/* 데스크탑 HD+급 이상 */
	@media screen and (min-width: 1401px) {
		/* Modal 크기 및 위치 */
		.imgViewModal {
			top: 5%;
			right: 20%;
			left: 20%;
			width: 60%;
			margin: 0 auto;
		}
		/* Modal Body 왼쪽 */
		.imgViewModal .modal-body .leftBody {
			display: inline-block;
			width: 45%;
		}
		/* Modal Body 오른쪽 */
		.imgViewModal .modal-body .rightBody {
			display: inline-block;
			width: 43%;
		}
	}
	/* 스마트폰 가로 화면 ~ 데스크탑 HD급 */
	@media screen and (max-width: 1400px) and (min-width: 481px) {
		/* Modal 크기 및 위치 */
		.imgViewModal {
			top: 20px;
			right: 20px;
			left: 20px;
			width: auto;
			margin: 0 auto;
		}
		/* Modal Body 왼쪽 */
		.imgViewModal .modal-body .leftBody {
			display: inline-block;
			width: 45%;
		}
		/* Modal Body 오른쪽 */
		.imgViewModal .modal-body .rightBody {
			display: inline-block;
			width: 43%;
		}
	}
	/* 스마트폰 세로 화면 */
	@media screen and (max-width: 480px) {
		/* Modal 크기 및 위치 */
		.imgViewModal {
			top: 10px;
			right: 10px;
			left: 10px;
			max-width: 460px;
			margin: 0 auto;
		}
		/* Modal Body 왼쪽 */
		.imgViewModal .modal-body .leftBody {
			display: block;
		}
		/* Modal Body 오른쪽 */
		.imgViewModal .modal-body .rightBody {
			display: block;
		}
	}
	/* 너비에 따른 반응성 끝 */
/*****************************************************************************************************/

/*****************************************************************************************************/
	/* 높이에 따른 반응성 */
	/* 스마트폰 가로 화면 */
	@media screen and (max-height: 440px) {
		/* Body 높이 설정 */
		.imgViewModal .modal-body {
			max-height: 250px;
			padding: 10px;
		}
		/* Footer를 Body영역에 표시 */
		.imgViewModal .modal-footer {
			padding: 0;
			position: absolute;
			border: 0;
			right: 10px;
			bottom: 15px;
			background: white;
		}
		.imgViewModal .modal-footer * {
			margin: 0;
		}
		
		/* Modify 영역 */
		/* Modal Body 왼쪽 */
		.imgViewModal .form-horizontal .modal-body .leftBody {
			height: 250px;
			line-height: 170px;
		}
		/* Modal Body 오른쪽 */
		.imgViewModal .form-horizontal .modal-body .rightBody {
			height: 200px;
		}
		/* Control 간 여백 */
		.imgViewModal .form-horizontal .modal-body .control-group {
			margin: 0 0 10px 0;
		}
		/* 라벨 여백 제거 */
		.imgViewModal .form-horizontal .modal-body .control-label {
			padding: 0;
			margin: 0;
			display: none;
		}
	}
	/* 스마트폰 세로 화면 1 */
	@media screen and (min-height: 441px) and (max-height: 550px) {
		/* Body 높이 설정 */
		.imgViewModal .modal-body {
			max-height: 330px;
		}
		/* Footer 크기 조정 */
		.imgViewModal .modal-footer {
			padding: 7px 7px 15px;
		}
		.imgViewModal .modal-footer * {
			margin: 0;
		}
		
		/* Modify 영역 */
		/* Modal Body 왼쪽 */
		.imgViewModal .form-horizontal .modal-body .leftBody {
			line-height: 250px;
		}
		/* Modal Body 오른쪽 */
		.imgViewModal .form-horizontal .modal-body .rightBody {
			height: 300px;
		}
		/* Control 간 여백 */
		.imgViewModal .form-horizontal .modal-body .control-group {
			margin: 12px;
		}
		/* 라벨 여백 제거 */
		.imgViewModal .form-horizontal .modal-body .control-label {
			padding: 0;
			margin: 0;
		}
	}
	/* 스마트폰 세로 화면 2 */
	@media screen and (min-height: 551px) and (max-height: 700px) {
		/* Body 높이 설정 */
		.imgViewModal .modal-body {
			max-height: 450px;
		}
		/* Footer 크기 조정 */
		.imgViewModal .modal-footer {
			padding: 7px 7px 15px;
		}
		.imgViewModal .modal-footer * {
			margin: 0;
		}
		
		/* Modify 영역 */
		/* Modal Body 왼쪽 */
		.imgViewModal .form-horizontal .modal-body .leftBody {
			min-height: 200px;
			line-height: 200px;
		}
		/* Control 간 여백 */
		.imgViewModal .form-horizontal .modal-body .control-group {
			margin: 0 0 10px 0;
		}
		/* 라벨 여백 제거 */
		.imgViewModal .form-horizontal .modal-body .control-label {
			padding: 0;
			margin: 0;
		}
	}
	/* 데스크탑 1 */
	@media screen and (min-height: 701px) and (max-height: 1000px) {
		/* Body 높이 설정 */
		.imgViewModal .modal-body {
			max-height: 550px;
		}
		
		/* Modify 영역 */
		/* Modal Body 왼쪽 */
		.imgViewModal .form-horizontal .modal-body .leftBody {
			min-height: 430px;
			line-height: 430px;
		}
		/* Control 간 여백 */
		.imgViewModal .form-horizontal .modal-body .control-group {
			margin: 30px;
		}
		/* textarea 크기 조정 */
		.imgViewModal .form-horizontal .modal-body .controls textarea {
			height: 100px;
		}
	}
	/* 데스크탑 2 */
	@media screen and (min-height: 1000px) {
		/* Body 높이 설정 */
		.imgViewModal .modal-body {
			max-height: 750px;
		}
		
		/* Modify 영역 */
		/* Modal Body 왼쪽 이미지의 위치 */
		.imgViewModal .form-horizontal .modal-body .leftBody {
			min-height: 430px;
			line-height: 430px;
		}
		/* Control 간 여백 */
		.imgViewModal .form-horizontal .modal-body .control-group {
			margin: 30px;
		}
		/* textarea 크기 조정 */
		.imgViewModal .form-horizontal .modal-body .controls textarea {
			height: 100px;
		}
	}
	/* 높이에 따른 반응성 끝 */
/*****************************************************************************************************/
</style>
