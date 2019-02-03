/**
 * Pastri Module
 * v. 0.0.1
 */

const DEFAULT_TRIANGLE_LENGTH = 6;

const calculateNeighboursFromArray = (prevArr) => {
	let newArr = [];

	for (let i = 0; i < prevArr.length; i++) {
		if(i === 0){
			newArr.push(1);
		}
		if(i < prevArr.length -1){
			let sum = prevArr[i] + prevArr[i + 1];
			newArr.push(sum);
		} else {
			newArr.push(1);
		}
	}
	return newArr;
};

const calculateTriangleStages = (lengthOfTriangle = DEFAULT_TRIANGLE_LENGTH) => {
	let triangle = [];
	for (let i = 0; i < lengthOfTriangle; i++) {
		if (i === 0){
			triangle.push([1]);
		} else if (i === 1){
			triangle.push([1,2,1]);
		}
		else {
			let newRow = calculateNeighboursFromArray(triangle[i-1]);
			triangle.push(newRow);
		}
	}
	return triangle;
};

const isEvenNumber = (num) => {
	if(num % 2 === 0){
		return true;
	} else {
		return false;
	}
};

/* module.exports = {
	calculateTriangleStages,
	isEvenNumber
}; */