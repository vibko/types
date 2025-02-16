<?php

declare(strict_types = 1);

namespace SmartEmailing\Types;

use SmartEmailing\Types\Comparable\ComparableInterface;
use SmartEmailing\Types\Comparable\StringComparableTrait;
use SmartEmailing\Types\ExtractableTraits\FloatExtractableTrait;

final class SigmoidValue implements ToStringInterface, ComparableInterface
{

	use FloatExtractableTrait;
	use ToStringTrait;
	use StringComparableTrait;

	private float $value;

	public function __construct(
		float $value
	) {
		if ($value < -1 || $value > 1) {
			throw new InvalidTypeException('Invalid sigmoid value: ' . $value);
		}

		$this->value = $value;
	}

	public function getValue(): float
	{
		return $this->value;
	}

}
