test_cases = gets.chomp.strip.to_i
out = []

test_cases.times do
  arr = gets.chomp.strip.split(' ').map(&:to_i)
  candles = arr[0]
  days = arr[1]
  days.times do
    data = candles / 2 if candles.even?
    data = (candles + 1) / 2  if candles.odd?
    candles -= data
    candles -= (candles / 4)
  end
  out << candles
end
puts out
