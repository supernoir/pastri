/**
 * Pastri Module
 * v. 0.0.1
 */

const DEFAULT_TRIANGLE_LENGTH = 20;

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

//const isSquare = num => num > 0 && Math.sqrt(num) % 1 === 0;
//const isFibonacci = num => isSquare(5 * num * num + 4) || isSquare(5 * num * num - 4);